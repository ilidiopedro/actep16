<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Iten
 * @package App\Models
 * @version October 17, 2017, 2:57 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection alocacaos
 * @property \Illuminate\Database\Eloquent\Collection Fase
 * @property \Illuminate\Database\Eloquent\Collection projectos
 * @property string nome
 * @property string descricao
 * @property integer quantidade
 * @property string foto
 */
class Iten extends Model
{
    use SoftDeletes;

    public $table = 'itens';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'descricao',
        'quantidade',
        'foto'
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
        'quantidade' => 'integer',
        'foto' => 'string'
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
