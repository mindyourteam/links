<?php

namespace Dwapp\Api\Controllers;

use App\Http\Controllers\Controller;

class ApiController extends Controller 
{
    public function content($url)
    {
        $content = file_get_content($url);
        return $content;
    }
}