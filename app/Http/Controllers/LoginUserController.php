<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function create()
    {
        return view('Auth.login');
    }

    public function store()
    {

    }
}
