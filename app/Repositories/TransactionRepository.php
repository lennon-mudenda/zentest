<?php

namespace App\Repositories;

use App\Models\Transaction;
use App\Repositories\BaseRepository;

/**
 * Class TransactionRepository
 * @package App\Repositories
 * @version August 29, 2020, 2:21 pm UTC
*/

class TransactionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'customer_id',
        'cproditem',
        'cprodtitle',
        'cprodtype',
        'ctransaction',
        'ctransaffiliate',
        'ctransamount',
        'ctranspaymentmethod',
        'ctransvendor',
        'ctransreceipt',
        'cupsellreceipt',
        'caffitid',
        'cvendthru',
        'cverify',
        'ctranstime'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Transaction::class;
    }
}
