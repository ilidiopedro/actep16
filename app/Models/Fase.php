<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Fase
 * @package App\Models
 * @version October 17, 2017, 2:58 pm UTC
 *
 * @property \App\Models\Evoluco evoluco
 * @property \App\Models\Projecto projecto
 * @property \App\Models\Iten iten
 * @property \Illuminate\Database\Eloquent\Collection alocacaos
 * @property \Illuminate\Database\Eloquent\Collection projectos
 * @property string nome
 * @property string descricao
 * @property integer percentagem
 * @property date data_inicio
 * @property date data_fim
 * @property integer tratamentos_id
 * @property integer projectos_id
 * @property integer evolucoes_id
 */
class Fase extends Model
{
    use SoftDeletes;

    public $table = 'fases';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'descricao',
        'percentagem',
        'data_inicio',
        'data_fim',
        'tratamentos_id',
        'projectos_id',
        'evolucoes_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'descricao' => 'string',
        'percentagem' => 'integer',
        'data_inicio' => 'date',
        'data_fim' => 'date',
        'tratamentos_id' => 'integer',
        'projectos_id' => 'integer',
        'evolucoes_id' => 'integer'
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
    public function evoluco()
    {
        return $this->belongsTo(\App\Models\Evoluco::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function projecto()
    {
        return $this->belongsTo(\App\Models\Projecto::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function iten()
    {
        return $this->belongsTo(\App\Models\Iten::class);
    }
}
