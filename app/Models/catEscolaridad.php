<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class catEscolaridad
 * @package App\Models
 * @version April 26, 2017, 10:40 pm UTC
 */
class catEscolaridad extends Model
{
    use SoftDeletes;

    public $table = 'cat_escolaridads';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'religion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'religion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'religion' => 'required'
    ];

    
}
