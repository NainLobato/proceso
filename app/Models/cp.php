<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Direccion
 * @package App\Models
 * @version May 9, 2017, 6:16 pm UTC
 */
class cp extends Model
{
    use SoftDeletes;

    public $table = 'cp';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'd_codigo'
    ];


/*    
     public function codigo()
    {
        return $this->hasOne('App\Models\cp', "id","idCodigo");
    }
*/
}