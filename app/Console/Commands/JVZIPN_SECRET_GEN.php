<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class JVZIPN_SECRET_GEN extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jvzipn_secret_key:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a secret key for the JVZIPN_SECRET_KEY used in communication with JVZIPN API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $key = $this->getRandomKey($this->laravel['config']['app.cipher']);

        $path = base_path('.env');

        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'JVZIPN_SECRET_KEY='.$this->laravel['config']['app.jvzipn_secret'], 'JVZIPN_SECRET_KEY='.$key, file_get_contents($path)
            ));
        }

        $this->laravel['config']['app.jvzipn_secret'] = $key;

        $this->info("Application key [$key] set successfully.");
    }

    protected function getRandomKey($cipher)
    {
        if ($cipher === 'AES-128-CBC') {
            return Str::random(16);
        }

        return Str::random(32);
    }
}
