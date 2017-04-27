<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatJuzgadoFed
 * @package App\Models
 * @version April 27, 2017, 10:18 pm UTC
 */
class CatJuzgadoFed extends Model
{
    use SoftDeletes;

    public $table = 'cat_juzgado_feds';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jusgadofederal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jusgadofederal' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jusgadofederal' => 'required'
    ];

    
}
