<?php

namespace Mindyourteam\Links\Controllers;

use Mindyourteam\Links\Models\Link;
use Mindyourteam\Links\Requests\LinkRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Knowfox\Crud\Services\Crud;

class LinkController extends Controller
{
    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
        $this->crud->setup('crud.link');
    }

    public function index(Request $request)
    {
        return $this->crud->index($request);
    }

    public function create()
    {
        return $this->crud->create();
    }

    public function store(LinkRequest $request)
    {
        list($link, $response) = $this->crud->store($request);
        return $response;
    }

    public function edit(Link $link)
    {
        return $this->crud->edit($link);
    }

    public function update(LinkRequest $request, Link $link)
    {
        return $this->crud->update($request, $link);
    }

    public function destroy(Link $link)
    {
        return $this->crud->destroy($link);
    }

    public function show(Link $link)
    {
        return redirect(str_replace('{today}', date('Y-m-d'), $link->url));
    }
}
