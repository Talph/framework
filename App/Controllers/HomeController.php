<?php

namespace App\Controllers;

use Core\Controller;
use Core\Http\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        return response()->json([
            'name'    => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store(...$arguments)
    {
        // TODO: Implement store() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function softDelete($id)
    {
        // TODO: Implement softDelete() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}