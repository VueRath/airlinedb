<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking;
use App\Models\Flight;

class ViewFlights extends Component
{
    public function render()
    {
        $flight = Flight::all();
        $id = Booking::find($flight->id);
        $bookings = Booking::where('user_id', auth()->id())->get();
        return view('livewire.view-flights', compact('bookings'));
    }
    public function cancelBooking($bookingId)
{
    $booking = Booking::find($bookingId);
    $booking->delete();
    session()->flash('message', 'Booking canceled successfully!');
}

}
