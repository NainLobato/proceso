<?php

namespace App\Repositories;

use App\Models\Avance;
use InfyOm\Generator\Common\BaseRepository;

class AvanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idMandamiento',
        'fechaAvance',
        'observaciones'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Avance::class;
    }
}
