<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tblinstancia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblinstancia';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['c_instancia','c_distrito','c_provincia','c_org_jurisd','c_sede','c_ubigeo','x_corto','x_nom_instancia'];

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    // protected $dateFormat = 'Ymd h:i:s';
}
