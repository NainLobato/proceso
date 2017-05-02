<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatEtapa
 * @package App\Models
 * @version May 2, 2017, 6:22 pm UTC
 */
class CatEtapa extends Model
{
    use SoftDeletes;

    public $table = 'cat_etapas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'etapa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'etapa' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'etapa' => 'required'
    ];

    
}
