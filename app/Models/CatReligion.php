<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatReligion
 * @package App\Models
 * @version April 26, 2017, 10:43 pm UTC
 */
class CatReligion extends Model
{
    use SoftDeletes;

    public $table = 'cat_religions';
    

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
