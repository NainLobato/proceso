<?php

namespace App\Repositories;

use App\Models\CatAgrupacion;
use InfyOm\Generator\Common\BaseRepository;

class CatAgrupacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'agrupacion',
        'clave'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatAgrupacion::class;
    }
}
