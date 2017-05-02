<?php

namespace App\Repositories;

use App\Models\CatMedida;
use InfyOm\Generator\Common\BaseRepository;

class CatMedidaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Medida',
        'IdTipoMedida'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatMedida::class;
    }
}
