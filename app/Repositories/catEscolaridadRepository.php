<?php

namespace App\Repositories;

use App\Models\catEscolaridad;
use InfyOm\Generator\Common\BaseRepository;

class catEscolaridadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'religion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return catEscolaridad::class;
    }
}
