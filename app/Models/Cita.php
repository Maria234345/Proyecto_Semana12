<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cita
 * @package App\Models
 * @version October 21, 2021, 2:21 am UTC
 *
 * @property string $paciente
 * @property string $fecha
 */
class Cita extends Model
{
    //
     //use SoftDeletes;

     public $table = 'cita';
     protected $primaryKey= 'idcita';
     public $timestamps =false;
 
     
     const CREATED_AT = 'created_at';
     const UPDATED_AT = 'updated_at';
 
 
     protected $dates = ['deleted_at'];
 
 
 
     public $fillable = [
         'paciente',
         'fecha'
     ];
 
     /**
      * The attributes that should be casted to native types.
      *
      * @var array
      */
     protected $casts = [
         'idcita' => 'integer',
         'paciente' => 'string',
         'fecha' => 'string'
     ];
 
     /**
      * Validation rules
      *
      * @var array
      */
     public static $rules = [
         'paciente' => 'nullable|string|max:45',
         'fecha' => 'nullable|string|max:45'
     ];
}
