<?php

namespace App\Repositories;

use App\Models\Audiencia;
use InfyOm\Generator\Common\BaseRepository;

class AudienciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idTipoAudiencia',
        'fecha',
        'idJuez',
        'idFiscal',
        'resolucion',
        'idEtapa',
        'observaciones',
        'idProceso',
        'idImputado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Audiencia::class;
    }
}
