<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatResolucionInvestigacion
 * @package App\Models
 * @version May 3, 2017, 10:08 pm UTC
 */
class CatResolucionInvestigacion extends Model
{
    use SoftDeletes;

    public $table = 'cat_resolucion_investigacions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ResolucionInvestigacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ResolucionInvestigacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ResolucionInvestigacion' => 'required'
    ];

    
}
