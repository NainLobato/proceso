<?php

namespace App\Repositories;

use App\Models\CatTipoRelacion;
use InfyOm\Generator\Common\BaseRepository;

class CatTipoRelacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipoRelacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatTipoRelacion::class;
    }
}
