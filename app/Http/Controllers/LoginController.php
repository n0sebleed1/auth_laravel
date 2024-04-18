<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('auth');
    }

    public function store(Request $request){

        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);

        if (! Auth::attempt($credentials)) {
            return back()
            ->withInput()
            ->withErrors([
                'name' => 'Неверный логин или пароль!'
            ]);
        }

        return redirect('success');
    }

    public function logout(){
        Auth::logout();
        return redirect('reg');
    }
}
