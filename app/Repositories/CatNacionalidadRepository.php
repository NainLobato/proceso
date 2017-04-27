<?php

namespace App\Repositories;

use App\Models\CatNacionalidad;
use InfyOm\Generator\Common\BaseRepository;

class CatNacionalidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nacionalidad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatNacionalidad::class;
    }
}
