<?php

namespace App\Repositories;

use App\Models\CatMedidaCautelar;
use InfyOm\Generator\Common\BaseRepository;

class CatMedidaCautelarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'medidaCautelar'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CatMedidaCautelar::class;
    }
}
