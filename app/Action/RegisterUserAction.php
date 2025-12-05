<?php

namespace App\Action;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterUserAction
{
    public function execute(Request $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
    }
}
