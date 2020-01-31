<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
   protected $tables="levels";
    protected $fillable = [
        'id_level','nama_level', 'detail'
    ];
}
