<?php

namespace App\Repositories;

use App\Models\Victima;
use InfyOm\Generator\Common\BaseRepository;

class VictimaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idPersona',
        'idDireccion',
        'idProceso'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Victima::class;
    }
}
