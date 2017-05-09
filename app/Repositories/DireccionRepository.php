<?php

namespace App\Repositories;

use App\Models\Direccion;
use InfyOm\Generator\Common\BaseRepository;

class DireccionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'calle',
        'numeroInterior',
        'numeroExterior',
        'idCodigo',
        'entreCalle1',
        'entreCalle2',
        'referencia',
        'idTipoLugar'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Direccion::class;
    }
}
