<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatAudiencia
 * @package App\Models
 * @version May 3, 2017, 9:17 pm UTC
 */
class CatAudiencia extends Model
{
    use SoftDeletes;

    public $table = 'cat_audiencias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'audiencia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'audiencia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'audiencia' => 'required'
    ];

    
}
