<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatTipoMedida
 * @package App\Models
 * @version May 2, 2017, 11:16 pm UTC
 */
class CatTipoMedida extends Model
{
    use SoftDeletes;

    public $table = 'cat_tipo_medidas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Tipomedida'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Tipomedida' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Tipomedida' => 'required'
    ];

    
}
