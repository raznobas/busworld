<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function bookRoute(Request $request, $routeId)
    {
        $user = $request->user();
        $route = Route::findOrFail($routeId);

        // Проверяем, что маршрут еще не забронирован
        if ($route->users()->where('user_id', $user->id)->exists()) {
            return redirect()->back()->with('error', 'Этот рейс уже забронирован вами.');
        }

        // Добавляем пользователя к маршруту
        $route->users()->attach($user->id);

        return redirect()->route('profile')->with('success', 'Вы успешно забронировали рейс.');
    }
    public function showProfile(Request $request)
    {
//        $user = Auth::user();

        $user = $request->user();
        $routesByUser = $user->routes;

        return view('profile',
            [
                'user' => $user,
                'routesByUser' => $routesByUser
            ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('login', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('profile')->with('success', 'Успешно');
        } else {
            dd(Auth::attempt($credentials)); // Выведет результат попытки авторизации
        }
//
//        return redirect()->route('login')->with('error', 'Ошибка');
    }

    public function register(Request $req)
    {
        $user = new User();
        $user->name = $req->input('name');
        $user->surname = $req->input('surname');
        $user->login = $req->input('login');
        $user->password = $req->input('password');
        $user->passport = $req->input('passport');

        $user->save();
        return redirect()->route('login')->with('success', 'Регистрация успешна');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
