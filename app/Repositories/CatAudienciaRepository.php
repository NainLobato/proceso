<?php

namespace App\Repositories;

use App\Models\CatAudiencia;
use InfyOm\Generator\Common\BaseRepository;

class CatAudienciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'audiencia'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatAudiencia::class;
    }
}
