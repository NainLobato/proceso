<?php

namespace App\Repositories;

use App\Models\CatMedidaProteccion;
use InfyOm\Generator\Common\BaseRepository;

class CatMedidaProteccionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'medidaProteccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatMedidaProteccion::class;
    }
}
