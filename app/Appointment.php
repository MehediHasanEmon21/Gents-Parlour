<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'customer_id', 'first_name', 'last_name','date','time','phone','status','message',
    ];
}
