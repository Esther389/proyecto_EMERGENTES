<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    protected $table ='plantas';
   protected $fillable =['nombre','altura','tipo','riego','estado','precio'];

}
