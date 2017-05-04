<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatResolucionAmparo
 * @package App\Models
 * @version May 3, 2017, 7:10 pm UTC
 */
class CatResolucionAmparo extends Model
{
    use SoftDeletes;

    public $table = 'cat_resolucion_amparos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'resolucionAmparo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'resolucionAmparo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'resolucionAmparo' => 'required'
    ];

    
}
