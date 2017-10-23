<?php

namespace App\Repositories;

use App\Models\Trabalhadore;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TrabalhadoreRepository
 * @package App\Repositories
 * @version October 17, 2017, 2:53 pm UTC
 *
 * @method Trabalhadore findWithoutFail($id, $columns = ['*'])
 * @method Trabalhadore find($id, $columns = ['*'])
 * @method Trabalhadore first($columns = ['*'])
*/
class TrabalhadoreRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'sexo',
        'data_nascimento',
        'telefone',
        'endereco',
        'foto',
        'users_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Trabalhadore::class;
    }
}
