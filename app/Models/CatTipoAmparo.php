<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatTipoAmparo
 * @package App\Models
 * @version May 3, 2017, 6:27 pm UTC
 */
class CatTipoAmparo extends Model
{
    use SoftDeletes;

    public $table = 'cat_tipo_amparos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipoAmparo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipoAmparo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipoAmparo' => 'required'
    ];

    
}
