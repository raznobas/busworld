<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Route;

class RouteController extends Controller
{
    public function index(Request $request)
    {
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

        return view('search', ['routes' => $routes]);
    }
    public function resetSearch() {
        return redirect()->route('search');
    }
}
