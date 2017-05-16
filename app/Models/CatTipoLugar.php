<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatTipoLugar
 * @package App\Models
 * @version May 9, 2017, 5:53 pm UTC
 */
class CatTipoLugar extends Model
{
    use SoftDeletes;

    public $table = 'cat_tipo_lugars';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipoLugar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipoLugar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipoLugar' => 'required'
    ];

    
}
