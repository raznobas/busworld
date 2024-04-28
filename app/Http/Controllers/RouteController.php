<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Route;

class RouteController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $start_city = $request->input('start_city');
        $end_city = $request->input('end_city');
        $date = $request->input('date');

        if ($start_city || $end_city || $date) {
            $routes = Route::where('start_city', 'like', '%' . $start_city . '%')
                ->where('end_city', 'like', '%' . $end_city . '%')
                ->where('date', 'like', '%' . $date . '%')
                ->get();
        } else {
            $routes = Route::all();
        }

        return view('search', ['routes' => $routes, 'user' => $user]);
    }
    public function resetSearch() {
        return redirect()->route('search');
    }
    public function createRoute(Request $request) {
        $route = new Route();

        $route->start_city = $request->input('start_city');
        $route->start_place = $request->input('start_place');
        $route->start_time = $request->input('start_time');
        $route->end_city = $request->input('end_city');
        $route->end_place = $request->input('end_place');
        $route->end_time = $request->input('end_time');
        $route->date = $request->input('date');

        $route->save();

        return redirect()->back()->with('success', 'Маршрут добавлен');
    }

    public function editRoute(Request $request, $routeId) {
        $route = Route::find($routeId);

        $route->start_city = $request->input('start_city');
        $route->start_place = $request->input('start_place');
        $route->start_time = $request->input('start_time');
        $route->end_city = $request->input('end_city');
        $route->end_place = $request->input('end_place');
        $route->end_time = $request->input('end_time');
        $route->date = $request->input('date');

        $route->save();
        return redirect()->back()->with('success', 'Маршрут обновлен');
    }
}
