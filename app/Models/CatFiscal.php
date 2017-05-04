<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatFiscal
 * @package App\Models
 * @version May 4, 2017, 7:48 pm UTC
 */
class CatFiscal extends Model
{
    use SoftDeletes;

    public $table = 'cat_fiscals';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'username',
        'password',
        'name',
        'idUnidad',
        'correo',
        'level',
        'nombramiento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'username' => 'string',
        'password' => 'string',
        'name' => 'string',
        'idUnidad' => 'integer',
        'correo' => 'string',
        'level' => 'integer',
        'nombramiento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'username' => 'required',
        'password' => 'required',
        'name' => 'required',
        'idUnidad' => 'required',
        'correo' => 'required',
        'level' => 'required',
        'nombramiento' => 'required'
    ];

    
}
