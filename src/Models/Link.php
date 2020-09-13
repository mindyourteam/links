<?php

namespace Mindyourteam\Links;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['shortcode', 'url'];
}
