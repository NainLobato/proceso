<?php

namespace App\Repositories;

use App\Models\CatEtapa;
use InfyOm\Generator\Common\BaseRepository;

class CatEtapaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'etapa'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatEtapa::class;
    }
}
