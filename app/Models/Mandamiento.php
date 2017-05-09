<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mandamiento
 * @package App\Models
 * @version April 28, 2017, 7:10 pm UTC
 */
class Mandamiento extends Model
{
    use SoftDeletes;

    public $table = 'mandamientos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idTipoMandamiento',
        'idAudiencia',
        'numeroOficio',
        'fechaOficio',
        'nombreGrupo',
        'fechaRecepcion',
        'fechaAsignacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idTipoMandamiento' => 'integer',
        'idAudiencia' => 'integer',
        'numeroOficio' => 'string',
        'fechaOficio' => 'date',
        'nombreGrupo' => 'string',
        'fechaRecepcion' => 'date',
        'fechaAsignacion' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idTipoMandamiento' => 'required',
        'idAudiencia' => 'required',
        'numeroOficio' => 'required',
        'fechaOficio' => 'required'
    ];

    public function tipoMandamiento()
    {
        return $this->hasOne('App\Models\CatTipoMando', "id","idTipoMandamiento");
    }
    
}
