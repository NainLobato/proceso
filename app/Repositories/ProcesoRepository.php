<?php

namespace App\Repositories;

use App\Models\Proceso;
use InfyOm\Generator\Common\BaseRepository;

class ProcesoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idUIPJ',
        'anioCarpeta',
        'numeroCarpeta',
        'anioProceso',
        'numeroProceso',
        'fechaInicioCarpeta',
        'idFiscal',
        'idJuez',
        'idJuzgado',
        'fechaRadicacion',
        'conDetenido',
        'obsequiaOrden',
        'fechaOrden',
        'observaciones'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Proceso::class;
    }
}
