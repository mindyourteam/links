<?php

namespace Mindyourteam\Links\Observers;

use Mindyourteam\Links\Models\Link;
use Illuminate\Http\Request;

class LinkObserver
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function creating(Link $link)
    {
        $link->user_id = $this->request->user()->id;
    }
}
