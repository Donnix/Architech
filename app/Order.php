<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $tables="orders";
    protected $fillable = [
        'id_user', 'id_service','pesan'
    ];

}
