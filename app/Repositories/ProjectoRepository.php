<?php

namespace App\Repositories;

use App\Models\Projecto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProjectoRepository
 * @package App\Repositories
 * @version October 17, 2017, 2:55 pm UTC
 *
 * @method Projecto findWithoutFail($id, $columns = ['*'])
 * @method Projecto find($id, $columns = ['*'])
 * @method Projecto first($columns = ['*'])
*/
class ProjectoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'desctricao',
        'duracao',
        'data_inicio',
        'data_fim',
        'produtos_id',
        'infraestruturas_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Projecto::class;
    }
}
