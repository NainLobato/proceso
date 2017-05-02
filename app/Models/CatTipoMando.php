<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatTipoMando
 * @package App\Models
 * @version May 2, 2017, 5:52 pm UTC
 */
class CatTipoMando extends Model
{
    use SoftDeletes;

    public $table = 'cat_tipo_mandos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'mandamiento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'mandamiento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'mandamiento' => 'required'
    ];

    
}
