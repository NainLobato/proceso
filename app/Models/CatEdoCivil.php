<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatEdoCivil
 * @package App\Models
 * @version April 26, 2017, 10:24 pm UTC
 */
class CatEdoCivil extends Model
{
    use SoftDeletes;

    public $table = 'cat_edo_civils';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'estadocivil'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'estadocivil' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'estadocivil' => 'required'
    ];

    
}
