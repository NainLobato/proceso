<?php

namespace App\Repositories;

use App\Models\Persona;
use InfyOm\Generator\Common\BaseRepository;

class PersonaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'paterno',
        'materno',
        'alias',
        'fechaNacimiento',
        'sexo',
        'idEtnia',
        'idEscolaridad',
        'padre',
        'idReligion',
        'ine',
        'rfc'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Persona::class;
    }
}
