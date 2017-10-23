<?php

namespace App\Repositories;

use App\Models\Fase;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FaseRepository
 * @package App\Repositories
 * @version October 17, 2017, 2:58 pm UTC
 *
 * @method Fase findWithoutFail($id, $columns = ['*'])
 * @method Fase find($id, $columns = ['*'])
 * @method Fase first($columns = ['*'])
*/
class FaseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Fase::class;
    }
}
