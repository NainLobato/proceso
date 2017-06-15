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
        'nombrePadre',
        'idReligion',
        'ine',
        'rfc',
        'idNacionalidad',
        'nombreMadre',
        'curp',
        'idEstadoCivil',
        'esEmpresa',
        'primerApellidoPadre',
        'segundoApellidoPadre',
        'primerApellidoMadre',
        'segundoApellidoMadre',
        'representante'
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
        'nombrePadre' => 'string',
        'idReligion' => 'integer',
        'ine' => 'string',
        'rfc' => 'string',
        'idNacionalidad'=> 'integer',
        'nombreMadre'=> 'string',
        'curp'=> 'string',
        'idEstadoCivil'=> 'integer',
         'esEmpresa'=> 'boolean',
        'primerApellidoPadre'=> 'string',
        'segundoApellidoPadre'=> 'string',
        'primerApellidoMadre'=> 'string',
        'segundoApellidoMadre'=> 'string',
        'representante'=> 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
    ];

     public function religion()
    {
        return $this->hasOne('App\Models\CatReligion', "id","idReligion");
    }
    
     public function nacionalidad()
    {
        return $this->hasOne('App\Models\CatNacionalidad', "id","idNacionalidad");
    }

    public function etnia()
    {
        return $this->hasOne('App\Models\CatEtnia', "id","idEtnia");
    }

     public function estadoCivil()
    {
        return $this->hasOne('App\Models\CatEstadoCivil', "id","idEstadoCivil");
    }

    public function escolaridad()
    {
        return $this->hasOne('App\Models\CatEscolaridad', "id","idEscolaridad");
    }

}
