<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CatMedidaCautelar
 * @package App\Models
 * @version May 3, 2017, 10:25 pm UTC
 */
class CatMedidaCautelar extends Model
{
    use SoftDeletes;

    public $table = 'cat_medida_cautelars';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'medidaCautelar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medidaCautelar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'medidaCautelar' => 'required'
    ];

    
}
