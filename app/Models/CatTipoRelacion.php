<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatTipoRelacion
 * @package App\Models
 * @version June 23, 2017, 6:56 pm UTC
 */
class CatTipoRelacion extends Model
{
    use SoftDeletes;

    public $table = 'cat_tipo_relacions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipoRelacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipoRelacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipoRelacion' => 'required'
    ];

    
}
