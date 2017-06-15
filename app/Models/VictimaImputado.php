<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Victima
 * @package App\Models
 * @version May 12, 2017, 9:38 pm UTC
 */
class VictimaImputado extends Model
{
    use SoftDeletes;

    public $table = 'victimaimputado';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idVictima',
        'idImputado',
        'idDelito',
        'idTipoRelacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idVictima' => 'integer',
        'idImputado' => 'integer',
        'idDelito' => 'integer',
        'idTipoRelacion' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idVictima' => 'required',
        'idImputado' => 'required',
        'idDelito' => 'required',
    ];

    
}
