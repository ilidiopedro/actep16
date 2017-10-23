<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Alocacao
 * @package App\Models
 * @version October 17, 2017, 2:56 pm UTC
 *
 * @property \App\Models\Projecto projecto
 * @property \App\Models\Trabalhadore trabalhadore
 * @property \Illuminate\Database\Eloquent\Collection projectos
 * @property string nome
 * @property integer projectos_id
 * @property integer trabalhadores_id
 */
class Alocacao extends Model
{
    use SoftDeletes;

    public $table = 'alocacaos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'projectos_id',
        'trabalhadores_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'projectos_id' => 'integer',
        'trabalhadores_id' => 'integer'
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
    public function projecto()
    {
        return $this->belongsTo(\App\Models\Projecto::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function trabalhadore()
    {
        return $this->belongsTo(\App\Models\Trabalhadore::class);
    }
}
