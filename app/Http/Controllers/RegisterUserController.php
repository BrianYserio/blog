<?php

namespace App\Http\Controllers;

use App\Action\RegisterUserAction;
use App\Http\Requests\RegisterUserRequest;

class RegisterUserController extends Controller
{
    public function create ()
    {
        return view('Auth.register');
    }

    public function store (
        RegisterUserAction $action,
        RegisterUserRequest $request
    ) {
        $action->execute($request);

        return redirect(route('login.create'));
    }
}
