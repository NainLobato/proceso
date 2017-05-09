<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Unidad
 * @package App\Models
 * @version May 8, 2017, 6:40 pm UTC
 */
class Unidad extends Model
{
    use SoftDeletes;

    public $table = 'unidads';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'direccion',
        'latitud',
        'longitud',
        'idFiscal',
        'telefono',
        'distrito',
        'region',
        'clave'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'direccion' => 'string',
        'latitud' => 'string',
        'longitud' => 'string',
        'idFiscal' => 'integer',
        'telefono' => 'string',
        'distrito' => 'integer',
        'region' => 'string',
        'clave' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'idFiscal' => 'required',
        'distrito' => 'required',
        'clave' => 'required'
    ];

    public function fiscal(){
        return $this->hasOne('App\Models\CatFiscal', "id","idFiscal");
    }
}
