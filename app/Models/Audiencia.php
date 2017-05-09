<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Audiencia
 * @package App\Models
 * @version May 8, 2017, 5:44 pm UTC
 */
class Audiencia extends Model
{
    use SoftDeletes;

    public $table = 'audiencias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idTipoAudiencia',
        'fecha',
        'idJuez',
        'idFiscal',
        'resolucion',
        'idEtapa',
        'observaciones',
        'idProceso',
        'idImputado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idTipoAudiencia' => 'integer',
        'idJuez' => 'integer',
        'idFiscal' => 'integer',
        'resolucion' => 'string',
        'idEtapa' => 'integer',
        'observaciones' => 'string',
        'idProceso' => 'integer',
        'idImputado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idTipoAudiencia' => 'required',
        'fecha' => 'required',
        'idFiscal' => 'required',
        'idEtapa' => 'required',
        'idProceso' => 'required',
        'idImputado' => 'required'
    ];

    public function fiscal(){
        return $this->hasOne('App\Models\CatFiscal', "id","idFiscal");


    }
    
    public function juez(){
        return $this->hasOne('App\Models\CatJuez', "id","idJuez");
    }
    public function etapa(){
        return $this->hasOne('App\Models\CatEtapa', "id","idEtapa");    
    }
    public function proceso(){
                return $this->hasOne('App\Models\Proceso', "id","idProceso");    
    }
    public function imputado(){
        return $this->hasOne('App\Models\Imputado', "id","idImputado");    

            
    }
}
