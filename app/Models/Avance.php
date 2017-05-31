<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Avance
 * @package App\Models
 * @version May 29, 2017, 5:44 pm UTC
 */
class Avance extends Model
{
    use SoftDeletes;

    public $table = 'avances';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idMandamiento',
        'fechaAvance',
        'observaciones'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idMandamiento' => 'integer',
        'fechaAvance' => 'date',
        'observaciones' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idMandamiento' => 'required',
        'fechaAvance' => 'required'
    ];

    
}
