<?php

namespace App\Repositories;

use App\Models\Unidad;
use InfyOm\Generator\Common\BaseRepository;

class UnidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'direccion',
        'latitud',
        'longitud',
        'idFiscal',
        'telefono',
        'distrito',
        'region',
        'clave'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Unidad::class;
    }
}
