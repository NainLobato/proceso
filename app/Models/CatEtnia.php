<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatEtnia
 * @package App\Models
 * @version April 26, 2017, 10:10 pm UTC
 */
class CatEtnia extends Model
{
    use SoftDeletes;

    public $table = 'cat_etnias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'etnia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'etnia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'etnia' => 'required'
    ];

    
}
