<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Infraestrutura
 * @package App\Models
 * @version October 17, 2017, 2:54 pm UTC
 *
 * @property \App\Models\Cliente cliente
 * @property \Illuminate\Database\Eloquent\Collection alocacaos
 * @property \Illuminate\Database\Eloquent\Collection Projecto
 * @property string nome
 * @property string tipo_infraestrutura
 * @property string foto
 * @property integer dimensoes
 * @property integer largura
 * @property integer comprimento
 * @property integer capacidade
 * @property integer clientes_id
 */
class Infraestrutura extends Model
{
    use SoftDeletes;

    public $table = 'infraestruturas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'tipo_infraestrutura',
        'foto',
        'dimensoes',
        'largura',
        'comprimento',
        'capacidade',
        'clientes_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'tipo_infraestrutura' => 'string',
        'foto' => 'string',
        'dimensoes' => 'integer',
        'largura' => 'integer',
        'comprimento' => 'integer',
        'capacidade' => 'integer',
        'clientes_id' => 'integer'
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
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function projectos()
    {
        return $this->hasMany(\App\Models\Projecto::class);
    }
}
