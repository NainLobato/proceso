<?php

namespace App\Repositories;

use App\Models\CatTipoAmparo;
use InfyOm\Generator\Common\BaseRepository;

class CatTipoAmparoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipoAmparo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatTipoAmparo::class;
    }
}
