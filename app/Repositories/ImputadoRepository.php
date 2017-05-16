<?php

namespace App\Repositories;

use App\Models\Imputado;
use InfyOm\Generator\Common\BaseRepository;

class ImputadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idPersona',
        'idProceso',
        'idDireccion',
        'esDetenido',
        'fechaDetencion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Imputado::class;
    }
}
