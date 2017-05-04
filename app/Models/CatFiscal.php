<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatFiscal
 * @package App\Models
 * @version May 4, 2017, 6:22 pm UTC
 */
class CatFiscal extends Model
{
    use SoftDeletes;

    public $table = 'cat_fiscals';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fiscal',
        'idUnidad',
        'nombramiento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fiscal' => 'string',
        'idUnidad' => 'integer',
        'nombramiento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fiscal' => 'required',
        'idUnidad' => 'required',
        'nombramiento' => 'required'
    ];

    
}
