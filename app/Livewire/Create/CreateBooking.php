<?php

namespace App\Livewire\Create;

use App\Models\Flight;
use GuzzleHttp\Psr7\Request;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateBooking extends Component
{
    #[Layout('layouts.app')]
    public $flight_number, $origin, $destination, $departure_date, $price;

    // Validation rules
    protected $rules = [
        'flight_number' => 'required|string|max:255',
        'origin' => 'required|string|max:255',
        'destination' => 'required|string|max:255',
        'departure_date' => 'required|date',
        'price' => 'required|numeric|min:0',
    ];

    public function submit()
    {
        // Validate the input
        $this->validate();

        // After validation, create the flight
        Flight::create([
            'flight_number' => $this->flight_number,
            'origin' => $this->origin,
            'destination' => $this->destination,
            'departure_date' => $this->departure_date,
            'price' => $this->price,
        ]);

        // Success message or redirect
        session()->flash('message', 'Flight created successfully!');
    }
    public function render()
    {
        return view('livewire.create.create-booking');
    }
}
