<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Persona
 * @package App\Models
 * @version April 26, 2017, 10:39 pm UTC
 */
class Persona extends Model
{
    use SoftDeletes;

    public $table = 'personas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'paterno',
        'materno',
        'alias',
        'fechaNacimiento',
        'sexo',
        'idEtnia',
        'idEscolaridad',
        'padre',
        'idReligion',
        'ine',
        'rfc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'paterno' => 'string',
        'materno' => 'string',
        'alias' => 'string',
        'fechaNacimiento' => 'date',
        'sexo' => 'string',
        'idEtnia' => 'integer',
        'idEscolaridad' => 'integer',
        'padre' => 'string',
        'idReligion' => 'integer',
        'ine' => 'string',
        'rfc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'paterno' => 'required',
        'idEscolaridad' => 'idEstadoCivil integer select',
        'padre' => 'madre string,256 text',
        'ine' => 'curp string,256 text'
    ];

    
}
