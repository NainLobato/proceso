<?php

namespace App\Repositories;

use App\Models\CatReligion;
use InfyOm\Generator\Common\BaseRepository;

class CatReligionRepository extends BaseRepository
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
        return CatReligion::class;
    }
}
