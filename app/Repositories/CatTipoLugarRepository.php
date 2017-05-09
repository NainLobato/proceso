<?php

namespace App\Repositories;

use App\Models\CatTipoLugar;
use InfyOm\Generator\Common\BaseRepository;

class CatTipoLugarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipoLugar'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatTipoLugar::class;
    }
}
