
<div>
    <h3>Your Booked Flights</h3>
    <ul>
        @foreach($bookings as $booking)
            <li>
                Flight: {{ $booking->flight->flight_number }} - {{ $booking->flight->origin }} to {{ $booking->flight->destination }}
                <button wire:click="cancelBooking({{ $booking->id }})">Cancel</button>
            </li>
        @endforeach
    </ul>
    @livewire('layouts.app')
</div>
