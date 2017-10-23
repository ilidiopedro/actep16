<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version October 17, 2017, 2:53 pm UTC
 *
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection alocacaos
 * @property \Illuminate\Database\Eloquent\Collection Infraestrutura
 * @property \Illuminate\Database\Eloquent\Collection projectos
 * @property string nome
 * @property integer nuit
 * @property bigInteger telefone
 * @property string endereco
 * @property string foto
 * @property string tipo_cliente
 * @property integer users_id
 */
class Cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'nuit',
        'telefone',
        'endereco',
        'foto',
        'tipo_cliente',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'nuit' => 'integer',
        'endereco' => 'string',
        'foto' => 'string',
        'tipo_cliente' => 'string',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function infraestruturas()
    {
        return $this->hasMany(\App\Models\Infraestrutura::class);
    }
}
