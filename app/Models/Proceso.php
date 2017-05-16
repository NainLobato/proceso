<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Proceso
 * @package App\Models
 * @version May 9, 2017, 6:43 pm UTC
 */
class Proceso extends Model
{
    use SoftDeletes;

    public $table = 'procesos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idUIPJ',
        'anioCarpeta',
        'numeroCarpeta',
        'anioProceso',
        'numeroProceso',
        'fechaInicioCarpeta',
        'idFiscal',
        'idJuez',
        'idJuzgado',
        'fechaRadicacion',
        'conDetenido',
        'obsequiaOrden',
        'fechaOrden',
        'observaciones'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idUIPJ' => 'integer',
        'anioCarpeta' => 'integer',
        'numeroCarpeta' => 'string',
        'anioProceso' => 'integer',
        'numeroProceso' => 'string',
        'fechaInicioCarpeta' => 'date',
        'idFiscal' => 'integer',
        'idJuez' => 'integer',
        'idJuzgado' => 'integer',
        'fechaRadicacion' => 'date',
        'conDetenido' => 'boolean',
        'obsequiaOrden' => 'boolean',
        'fechaOrden' => 'date',
        'observaciones' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idUIPJ' => 'required',
        'anioCarpeta' => 'required',
        'numeroCarpeta' => 'required',
        'anioProceso' => 'required',
        'numeroProceso' => 'required',
        'fechaRadicacion' => 'required',
        'conDetenido' => 'required',
        'obsequiaOrden' => 'required'
    ];

    public function fiscal(){
        return $this->hasOne('App\Models\CatFiscal', "id","idFiscal");
    }

    public function unidad(){
        return $this->hasOne('App\Models\Unidad', "id","idUnidad");
    }

    public function juez(){
        return $this->hasOne('App\Models\CatJuez', "id","idJuez");
    }

    public function juzgado(){
        return $this->hasOne('App\Models\CatJuzgado', "id","idJuzgado");
    }
}
