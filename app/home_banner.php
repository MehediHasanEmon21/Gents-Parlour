<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home_banner extends Model
{
    protected $fillable = [
        'title', 'video_link', 'button','image',
    ];

}
