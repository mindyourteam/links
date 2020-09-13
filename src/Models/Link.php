<?php

namespace Mindyourteam\Links\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['shortcode', 'url'];
}
