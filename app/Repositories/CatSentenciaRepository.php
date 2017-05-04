<?php

namespace App\Repositories;

use App\Models\CatSentencia;
use InfyOm\Generator\Common\BaseRepository;

class CatSentenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sentencia'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatSentencia::class;
    }
}
