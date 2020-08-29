<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Transaction
 * @package App\Models
 * @version August 29, 2020, 9:14 am UTC
 *
 * @property \App\Models\Customer customer
 * @property integer customer_id
 * @property string cproditem
 * @property string cprodtitle
 * @property string cprodtype
 * @property string ctransaction
 * @property string ctransaffiliate
 * @property integer ctransamount
 * @property string ctranspaymentmethod
 * @property string ctransvendor
 * @property string ctransreceipt
 * @property string cupsellreceipt
 * @property string caffitid
 * @property string cvendthru
 * @property string cverify
 * @property string ctranstime
 */
class Transaction extends Model
{

    public $table = 'transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'cproditem' => 'string',
        'cprodtitle' => 'string',
        'cprodtype' => 'string',
        'ctransaction' => 'string',
        'ctransaffiliate' => 'string',
        'ctransamount' => 'integer',
        'ctranspaymentmethod' => 'string',
        'ctransvendor' => 'string',
        'ctransreceipt' => 'string',
        'cupsellreceipt' => 'string',
        'caffitid' => 'string',
        'cvendthru' => 'string',
        'cverify' => 'string',
        'ctranstime' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer_id' => 'required',
        'cproditem' => 'required',
        'cprodtitle' => 'required',
        'cprodtype' => 'required',
        'ctransaction' => 'required',
        'ctransaffiliate' => 'required',
        'ctransamount' => 'required',
        'ctranspaymentmethod' => 'required',
        'ctransvendor' => 'required',
        'ctransreceipt' => 'required',
        'cupsellreceipt' => 'required',
        'caffitid' => 'required',
        'cvendthru' => 'required',
        'cverify' => 'required',
        'ctranstime' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id');
    }
}
