<?php

namespace App\Http\Controllers;
use App\Models\Route;

class RouteController extends Controller
{
    public function index() {
        $routes = Route::all();
        return view('search', ['routes' => $routes]);
    }
}
