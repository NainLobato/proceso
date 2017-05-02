<?php

namespace App\Repositories;

use App\Models\CatTipoMando;
use InfyOm\Generator\Common\BaseRepository;

class CatTipoMandoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mandamiento'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatTipoMando::class;
    }
}
