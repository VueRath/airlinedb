<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Flight;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookFlight extends Component
{
    public $flight_id;

    public function bookFlight()
    {
        $flight = Flight::find($this->flight_id);
        if ($flight) {
            Booking::create([
                'user_id' => Auth::id(),
                'flight_id' => $flight->id,
            ]);
            session()->flash('message', 'Flight booked successfully!');
        }
    }

    public function render()
    {
        $flights = Flight::all();
        return view('livewire.book-flight', compact('flights'));
    }
}
