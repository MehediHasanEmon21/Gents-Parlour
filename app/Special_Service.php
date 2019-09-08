<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special_Service extends Model
{
    protected $fillable = [
        'icon_name', 'name', 'description',
    ];
}
