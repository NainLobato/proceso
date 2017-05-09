<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Imputado
 * @package App\Models
 * @version May 9, 2017, 5:47 pm UTC
 */
class Imputado extends Model
{
    use SoftDeletes;

    public $table = 'imputados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idPersona',
        'idProceso',
        'idDireccion',
        'esDetenido',
        'fechaDetencion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idPersona' => 'integer',
        'idProceso' => 'integer',
        'idDireccion' => 'integer',
        'esDetenido' => 'boolean'
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

    public function persona()
    {
        return $this->hasOne('App\Models\Persona', "id","idPersona");
    }

     public function proceso()
    {
        return $this->hasOne('App\Models\Proceso', "id","idProceso");
    }

    public function direccion()
    {
        return $this->hasOne('App\Models\Direccion', "id","idDireccion");
    }
    
}
