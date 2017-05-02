<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatDelito
 * @package App\Models
 * @version April 28, 2017, 4:10 pm UTC
 */
class CatDelito extends Model
{
    use SoftDeletes;

    public $table = 'cat_delitos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'delito',
        'idAgrupacion',
        'ndelnum',
        'orden',
        'activo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'delito' => 'string',
        'idAgrupacion' => 'integer',
        'ndelnum' => 'string',
        'orden' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'delito' => 'required',
        'idAgrupacion' => 'required',
        'ndelnum' => 'required',
        'orden' => 'required',
        'activo' => 'required'
    ];

    
}
