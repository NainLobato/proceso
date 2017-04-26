<?php

namespace App\Repositories;

use App\Models\CatEdoCivil;
use InfyOm\Generator\Common\BaseRepository;

class CatEdoCivilRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'estadocivil'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatEdoCivil::class;
    }
}
