<?php

namespace App\Repositories;

use App\Models\CatJuzgadoFed;
use InfyOm\Generator\Common\BaseRepository;

class CatJuzgadoFedRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jusgadofederal'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatJuzgadoFed::class;
    }
}
