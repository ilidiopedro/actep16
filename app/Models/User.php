<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version October 17, 2017, 2:51 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection alocacaos
 * @property \Illuminate\Database\Eloquent\Collection Cliente
 * @property \Illuminate\Database\Eloquent\Collection projectos
 * @property \Illuminate\Database\Eloquent\Collection Trabalhadore
 * @property string name
 * @property string password
 * @property string email
 * @property string foto
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'password',
        'email',
        'foto',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'password' => 'string',
        'email' => 'string',
        'foto' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function clientes()
    {
        return $this->hasMany(\App\Models\Cliente::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function trabalhadores()
    {
        return $this->hasMany(\App\Models\Trabalhadore::class);
    }
}
