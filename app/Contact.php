<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $tables="contacts";
    protected $fillable = [
       'nama','telepon','email','saran'
    ];
}
