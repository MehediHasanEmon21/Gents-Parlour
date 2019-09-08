<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = [
        'barber_id', 'month', 'date','year','pay',
    ];
}
