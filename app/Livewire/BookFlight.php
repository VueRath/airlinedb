<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Flight;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

class BookFlight extends Component
{
    public $flight_id;
    #[Layout('layouts.app')]

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
        return view('livewire.book-flight',
        [
            'flights' => Flight::all()
        ] );
    }
}
