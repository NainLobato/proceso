<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Direccion
 * @package App\Models
 * @version May 9, 2017, 6:16 pm UTC
 */
class Direccion extends Model
{
    use SoftDeletes;

    public $table = 'direccions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'calle',
        'numeroInterior',
        'numeroExterior',
        'idCodigo',
        'entreCalle1',
        'entreCalle2',
        'referencia',
        'idTipoLugar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'calle' => 'string',
        'numeroInterior' => 'string',
        'numeroExterior' => 'string',
        'idCodigo' => 'integer',
        'entreCalle1' => 'string',
        'entreCalle2' => 'string',
        'referencia' => 'string',
        'idTipoLugar' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'calle' => 'required',
        'idCodigo' => 'required',
        'entreCalle2' => 'referencia string,256 text'
    ];

    
}
