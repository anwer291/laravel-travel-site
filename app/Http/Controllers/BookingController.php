<?php
namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FlightBookingMail;

class BookingController extends Controller
{
    public function showForm($id)
    {
        $flight = Flight::findOrFail($id);
        return view('flights.booking', compact('flight'));
    }

    public function submitForm(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $flight = Flight::findOrFail($id);

        // Send email
        Mail::to($request->email)->send(new FlightBookingMail($flight, $request->phone));

        return redirect()->route('booking.form', $id)->with('success', 'Booking confirmation sent to your email!');
    }
}
