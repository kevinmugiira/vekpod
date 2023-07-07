<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {

        Auth::logout();

        #$request->user()->session()->logout();

        #$request->user()->token()->revoke();

        #$this->guard('user')->logout();


        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }


    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
    }
}
