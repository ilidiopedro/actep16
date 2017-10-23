<?php

namespace App\Repositories;

use App\Models\Iten;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ItenRepository
 * @package App\Repositories
 * @version October 17, 2017, 2:57 pm UTC
 *
 * @method Iten findWithoutFail($id, $columns = ['*'])
 * @method Iten find($id, $columns = ['*'])
 * @method Iten first($columns = ['*'])
*/
class ItenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'descricao',
        'quantidade',
        'foto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Iten::class;
    }
}
