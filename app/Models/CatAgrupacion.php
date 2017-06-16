<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatAgrupacion
 * @package App\Models
 * @version June 14, 2017, 12:41 am UTC
 */
class CatAgrupacion extends Model
{
    use SoftDeletes;

    public $table = 'cat_agrupacions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'agrupacion',
        'clave'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'agrupacion' => 'string',
        'clave' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'agrupacion' => 'required',
        'clave' => 'required'
    ];

    
}
