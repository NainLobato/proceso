<?php

namespace App\Repositories;

use App\Models\CatResolucionAmparo;
use InfyOm\Generator\Common\BaseRepository;

class CatResolucionAmparoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'resolucionAmparo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatResolucionAmparo::class;
    }
}
