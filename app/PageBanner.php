<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageBanner extends Model
{
    protected $fillable = [
        'page_title', 'image',
    ];
}
