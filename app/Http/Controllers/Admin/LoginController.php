<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin()
    {
       return view('admin.auth.login' );
    }

    public  function login(LoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')
            ->attempt(['email' => $request
            ->input("email"), 'password' => $request->input("password")], $remember_me)) {
            // notify()->success('Connexion réussie  ');
            return redirect() -> route('admin.dashboard');
        }
        // notify()->error('Erreur dans les données, veuillez réessayer');
        //return redirect()->back()->with(['error' => 'Erreur dans les données']);
    }
}
