<?php

namespace App\Repositories;

use App\Models\CatJuez;
use InfyOm\Generator\Common\BaseRepository;

class CatJuezRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'juez',
        'juzgado',
        'distrito'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatJuez::class;
    }
}
