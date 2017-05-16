<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Victima
 * @package App\Models
 * @version May 12, 2017, 9:38 pm UTC
 */
class Victima extends Model
{
    use SoftDeletes;

    public $table = 'victimas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idPersona',
        'idDireccion',
        'idProceso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idPersona' => 'integer',
        'idDireccion' => 'integer',
        'idProceso' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idPersona' => 'required',
        'idProceso' => 'required'
    ];

    
}
