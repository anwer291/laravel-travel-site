<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function searchForm()
    {
        return view('flights.search');
    }

    public function search(Request $request)
    {
        $flights = Flight::where(function ($query) use ($request) {
        $query->where('departure_airport_code', 'like', '%' . $request->departure_from . '%')
              ->orWhere('departure_airport_name', 'like', '%' . $request->departure_from . '%');
    })
    ->where(function ($query) use ($request) {
        $query->where('arrival_airport_code', 'like', '%' . $request->arrive_to . '%')
              ->orWhere('arrival_airport_name', 'like', '%' . $request->arrive_to . '%');
    })
    ->whereDate('departure_date', $request->departure_date)
    ->when($request->airline, fn($query) => $query->where('airline', 'like', '%' . $request->airline . '%'))
    ->when($request->class, fn($query) => $query->where('class', $request->class))
    ->where('available_seats', '>=', $request->passengers)
    ->get();

return view('flights.results', [
    'flights' => $flights,
    'searchData' => $request->all()
]);

    }
}
