<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatMedida
 * @package App\Models
 * @version May 2, 2017, 10:57 pm UTC
 */
class CatMedida extends Model
{
    use SoftDeletes;

    public $table = 'cat_medidas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Medida',
        'IdTipoMedida'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Medida' => 'string',
        'IdTipoMedida' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Medida' => 'required',
        'IdTipoMedida' => 'required'
    ];

    
}
