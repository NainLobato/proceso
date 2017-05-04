<?php

namespace App\Repositories;

use App\Models\CatResolucionInvestigacion;
use InfyOm\Generator\Common\BaseRepository;

class CatResolucionInvestigacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ResolucionInvestigacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatResolucionInvestigacion::class;
    }
}
