<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_Address extends Model
{
    protected $fillable = [
        'phone', 'address', 'street','house','open','time',
    ];
}
