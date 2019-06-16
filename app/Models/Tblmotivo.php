<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tblmotivo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblmotivo';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','sigla','descripcion'];

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    // protected $dateFormat = 'Ymd h:i:s';
}
