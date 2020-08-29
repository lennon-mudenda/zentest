<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Customer
 * @package App\Models
 * @version August 29, 2020, 9:13 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection transactions
 * @property string ccustname
 * @property string ccuststate
 * @property string ccustcc
 * @property string email
 */
class Customer extends Model
{

    public $table = 'customers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'ccustname',
        'ccuststate',
        'ccustcc',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ccustname' => 'string',
        'ccuststate' => 'string',
        'ccustcc' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ccustname' => 'required',
        'ccuststate' => 'required',
        'ccustcc' => 'required',
        'email' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function transactions()
    {
        return $this->hasMany(\App\Models\Transaction::class, 'customer_id');
    }
}
