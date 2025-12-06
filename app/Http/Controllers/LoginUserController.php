<?php

namespace App\Http\Controllers;

use App\Action\LoginUserAction;
use App\Http\Requests\LoginUserRequest;

class LoginUserController extends Controller
{
    public function create()
    {
        return view('Auth.login');
    }

    public function store (
        LoginUserAction $action,
        LoginUserRequest $request
    ) {
        $validated = $request->validated();

        if($action->execute($validated))
        {
            return redirect()->intended('index');
        }

        return back()->withErrors([
            'email' => 'Wrong email or password',
        ])->onlyInput('email');
    }
}
