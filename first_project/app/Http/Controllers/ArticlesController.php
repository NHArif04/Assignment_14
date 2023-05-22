<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(Request $request, $id)
    {
        $rememberToken = $request->cookie('remember_token');
        if ($rememberToken === null) {}
    }
}
