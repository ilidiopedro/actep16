<?php

namespace App\Repositories;

use App\Models\Alocacao;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AlocacaoRepository
 * @package App\Repositories
 * @version October 17, 2017, 2:56 pm UTC
 *
 * @method Alocacao findWithoutFail($id, $columns = ['*'])
 * @method Alocacao find($id, $columns = ['*'])
 * @method Alocacao first($columns = ['*'])
*/
class AlocacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'projectos_id',
        'trabalhadores_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Alocacao::class;
    }
}
