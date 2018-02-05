<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;
use Session;

class AuthController extends Controller
{
    public  function ShowLoginForm()
    {
        return view('auth.login');
    }

    public function Login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            return Redirect::route('root');
        }
        return 'Ooops Something Wrong Happens :(';  
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();

        return Redirect::route('getLogin');
    }
}
