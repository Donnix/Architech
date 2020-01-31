<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
   
    protected $fillable = [
        'nama', 'detail','biaya','id_arsitek','id_projekmanager'
    ];
}
