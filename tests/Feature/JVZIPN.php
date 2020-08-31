<?php

namespace Tests\Feature;

use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class JVZIPN extends TestCase
{
    private $transactions = [
        'SALE',
        'BILL',
        'RFND',
        'CGBK',
        'INSF',
        'CANCEL-REBILL',
        'UNCANCEL-REBILL'
    ];

    private $paymentMethods = [
        'PYPL',
        'AN',
        'ANCIM',
        'STRP',
        'OPPY',
        'UNKN'
    ];
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testWithCorrectPayload()
    {
        $payload = $this->signPayload($this->generatePayload());
        print(json_encode($payload));

        $response = $this->post('/api/JVZIPN/handler', $payload);
        print(json_encode($response));

        $response->assertStatus(200);
    }

    public function testWithoutCorrectPayload()
    {
        $payload = $this->generatePayload();

        $response = $this->post('/api/JVZIPN/handler', $payload);

        $response->assertStatus(500);
    }

    private function generatePayload()
    {
        $faker = Faker::create();
        return [
            'ccustname' => 'Lee Muddy',
            'ccuststate' => 'TZ',
            'ccustcc' => 'ZA',
            'ccustemail' => $faker->email,
            'cproditem' => $faker->numberBetween(1000,10000).'',
            'cprodtitle' => 'Lakers',
            'cprodtype' => 'Lakers',
            'ctransaction' => $this->transactions[$faker->numberBetween(0,6)],
            'ctransaffiliate' => $faker->lastName,
            'ctransamount' => $faker->numberBetween(1000,100000),
            'ctranspaymentmethod' => $this->paymentMethods[$faker->numberBetween(0,5)],
            'ctransvendor' => $faker->lastName,
            'ctransreceipt' => $faker->lastName,
            'cupsellreceipt' => $faker->lastName,
            'caffitid' => $faker->lastName,
            'cvendthru' => $faker->lastName,
            'cverify' => '',
            'ctranstime' => Carbon::now()->unix()
        ];
    }

    private function signPayload($payload)
    {
        $payload['cverify'] = \App\JVZIPN\JVZIPN::calculateVerificationCode($payload);
        return $payload;
    }
}
