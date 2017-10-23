<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Evolucao
 * @package App\Models
 * @version October 17, 2017, 2:57 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection alocacaos
 * @property \Illuminate\Database\Eloquent\Collection Fase
 * @property \Illuminate\Database\Eloquent\Collection projectos
 * @property integer tamano_in
 * @property integer tamanho_fin
 * @property date data_avaliacao
 * @property string descricao
 */
class Evolucao extends Model
{
    use SoftDeletes;

    public $table = 'evolucoes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'tamano_in',
        'tamanho_fin',
        'data_avaliacao',
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tamano_in' => 'integer',
        'tamanho_fin' => 'integer',
        'data_avaliacao' => 'date',
        'descricao' => 'string'
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
    public function fases()
    {
        return $this->hasMany(\App\Models\Fase::class);
    }
}
