<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatJuzgado
 * @package App\Models
 * @version April 28, 2017, 4:26 pm UTC
 */
class CatJuzgado extends Model
{
    use SoftDeletes;

    public $table = 'cat_juzgados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'juzgado',
        'distrito'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'juzgado' => 'string',
        'distrito' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'juzgado' => 'required',
        'distrito' => 'required'
    ];

    
}
