<?php

namespace App\Action;

use Illuminate\Support\Facades\Auth;

class LoginUserAction
{
    public function execute(array $credentials)
    {
        if(Auth::attempt($credentials))
        {
            session()->regenerate();
            return true;
        }

        return false;
    }
}
