<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatJuez
 * @package App\Models
 * @version May 4, 2017, 6:03 pm UTC
 */
class CatJuez extends Model
{
    use SoftDeletes;

    public $table = 'cat_juezs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'juez',
        'juzgado',
        'distrito'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'juez' => 'string',
        'juzgado' => 'string',
        'distrito' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'juez' => 'required',
        'juzgado' => 'required',
        'distrito' => 'required'
    ];

    
}
