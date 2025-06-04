<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Flight; // ✅ Correct import

class FlightBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $flight;
    public $phone;

    public function __construct(Flight $flight, $phone)
    {
        $this->flight = $flight;
        $this->phone = $phone;
    }

    public function build()
    {
        return $this->subject('Your Flight Booking Confirmation')
                    ->view('emails.booking');
    }
}
