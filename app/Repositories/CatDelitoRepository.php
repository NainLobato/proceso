<?php

namespace App\Repositories;

use App\Models\CatDelito;
use InfyOm\Generator\Common\BaseRepository;

class CatDelitoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'delito',
        'idAgrupacion',
        'ndelnum',
        'orden',
        'activo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatDelito::class;
    }
}
