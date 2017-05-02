<?php

namespace App\Repositories;

use App\Models\Mandamiento;
use InfyOm\Generator\Common\BaseRepository;

class MandamientoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idTipoMandamiento',
        'idAudiencia',
        'numeroOficio',
        'fechaOficio',
        'nombreGrupo',
        'fechaRecepcion',
        'fechaAsignacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mandamiento::class;
    }
}
