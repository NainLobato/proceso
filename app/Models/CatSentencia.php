<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatSentencia
 * @package App\Models
 * @version May 3, 2017, 10:16 pm UTC
 */
class CatSentencia extends Model
{
    use SoftDeletes;

    public $table = 'cat_sentencias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'sentencia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'sentencia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sentencia' => 'required'
    ];

    
}
