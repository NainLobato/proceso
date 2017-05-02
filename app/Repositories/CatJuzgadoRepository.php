<?php

namespace App\Repositories;

use App\Models\CatJuzgado;
use InfyOm\Generator\Common\BaseRepository;

class CatJuzgadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'juzgado',
        'distrito'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatJuzgado::class;
    }
}
