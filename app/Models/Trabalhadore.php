<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Trabalhadore
 * @package App\Models
 * @version October 17, 2017, 2:53 pm UTC
 *
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection Alocacao
 * @property \Illuminate\Database\Eloquent\Collection Perfil
 * @property \Illuminate\Database\Eloquent\Collection projectos
 * @property string nome
 * @property string sexo
 * @property date data_nascimento
 * @property bigInteger telefone
 * @property string endereco
 * @property string foto
 * @property integer users_id
 */
class Trabalhadore extends Model
{
    use SoftDeletes;

    public $table = 'trabalhadores';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'sexo',
        'data_nascimento',
        'telefone',
        'endereco',
        'foto',
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
        'sexo' => 'string',
        'data_nascimento' => 'date',
        'endereco' => 'string',
        'foto' => 'string',
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
    public function alocacaos()
    {
        return $this->hasMany(\App\Models\Alocacao::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function perfils()
    {
        return $this->hasMany(\App\Models\Perfil::class);
    }
}
