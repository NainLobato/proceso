<?php

namespace App\Repositories;

use App\Models\CatEtnia;
use InfyOm\Generator\Common\BaseRepository;

class CatEtniaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'etnia'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatEtnia::class;
    }
}
