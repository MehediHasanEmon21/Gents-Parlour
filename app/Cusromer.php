<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cusromer extends Model
{
    protected $fillable = [
        'name', 'email', 'password','phone','address',
    ];
}
