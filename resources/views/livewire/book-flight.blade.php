@extends('layouts.app')

@section('content')
    <h3>Book a Flight</h3>
    <form wire:submit.prevent="bookFlight">
        <div>
            <label for="flight_id">Select Flight:</label>
            <select wire:model="flight_id">
                <option value="">--Select a Flight--</option>
                @foreach($flights as $flight)
                    <option value="{{ $flight->id }}">{{ $flight->flight_number }} - {{ $flight->origin }} to {{ $flight->destination }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Book Flight</button>
    </form>

    @if(session()->has('message'))
        <p>{{ session('message') }}</p>
    @endif
@endsection
