<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller {
    public function login(Request $request)
    {
        $credentials = $request->only('login', 'pass');

        $credentials['password'] = $credentials['pass'];
        unset($credentials['pass']);

        if (Auth::attempt($credentials)) {
            return redirect()->route('profile')->with('success', 'Успешно');
        }

        return redirect()->route('login')->with('error', 'Ошибка');
    }
    public function register(Request $req)
    {
        $user = new User();
        $user->name = $req->input('name');
        $user->surname = $req->input('surname');
        $user->login = $req->input('login');
        $user->pass = $req->input('pass');
        $user->passport = $req->input('passport');

        $user->save();
        return redirect()->route('login')->with('success', 'Регистрация успешна');
    }
}
