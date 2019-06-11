<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cedula extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cedula';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nguia','fguia','nsij','nced','fced','nexp','fexp','csede','nbarcode','estado','tblinstancia_id'    
    ];

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    // protected $dateFormat = 'Ymd h:i:s';

}
