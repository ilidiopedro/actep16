<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Projecto
 * @package App\Models
 * @version October 17, 2017, 2:55 pm UTC
 *
 * @property \App\Models\Infraestrutura infraestrutura
 * @property \App\Models\Produto produto
 * @property \Illuminate\Database\Eloquent\Collection Alocacao
 * @property \Illuminate\Database\Eloquent\Collection Fase
 * @property string nome
 * @property string desctricao
 * @property integer duracao
 * @property date data_inicio
 * @property date data_fim
 * @property integer produtos_id
 * @property integer infraestruturas_id
 */
class Projecto extends Model
{
    use SoftDeletes;

    public $table = 'projectos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'desctricao',
        'duracao',
        'data_inicio',
        'data_fim',
        'produtos_id',
        'infraestruturas_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'desctricao' => 'string',
        'duracao' => 'integer',
        'data_inicio' => 'date',
        'data_fim' => 'date',
        'produtos_id' => 'integer',
        'infraestruturas_id' => 'integer'
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
    public function infraestrutura()
    {
        return $this->belongsTo(\App\Models\Infraestrutura::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function produto()
    {
        return $this->belongsTo(\App\Models\Produto::class);
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
    public function fases()
    {
        return $this->hasMany(\App\Models\Fase::class);
    }
}
