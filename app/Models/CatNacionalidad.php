<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatNacionalidad
 * @package App\Models
 * @version April 27, 2017, 6:01 pm UTC
 */
class CatNacionalidad extends Model
{
    use SoftDeletes;

    public $table = 'cat_nacionalidads';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nacionalidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nacionalidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nacionalidad' => 'required'
    ];

    
}
