<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatMedidaProteccion
 * @package App\Models
 * @version May 3, 2017, 10:39 pm UTC
 */
class CatMedidaProteccion extends Model
{
    use SoftDeletes;

    public $table = 'cat_medida_proteccions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'medidaProteccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medidaProteccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'medidaProteccion' => 'required'
    ];

    
}
