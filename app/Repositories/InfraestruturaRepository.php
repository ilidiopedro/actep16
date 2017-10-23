<?php

namespace App\Repositories;

use App\Models\Infraestrutura;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InfraestruturaRepository
 * @package App\Repositories
 * @version October 17, 2017, 2:54 pm UTC
 *
 * @method Infraestrutura findWithoutFail($id, $columns = ['*'])
 * @method Infraestrutura find($id, $columns = ['*'])
 * @method Infraestrutura first($columns = ['*'])
*/
class InfraestruturaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Infraestrutura::class;
    }
}
