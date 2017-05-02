<?php

namespace App\Repositories;

use App\Models\CatTipoMedida;
use InfyOm\Generator\Common\BaseRepository;

class CatTipoMedidaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Tipomedida'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatTipoMedida::class;
    }
}
