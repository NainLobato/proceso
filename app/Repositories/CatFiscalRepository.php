<?php

namespace App\Repositories;

use App\Models\CatFiscal;
use InfyOm\Generator\Common\BaseRepository;

class CatFiscalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'username',
        'password',
        'name',
        'idUnidad',
        'correo',
        'level',
        'nombramiento'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatFiscal::class;
    }
}
