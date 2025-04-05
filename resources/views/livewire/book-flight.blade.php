@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-gray shadow-lg rounded-xl mt-10">
    <h3 class="text-2xl font-bold mb-4 text-white-600">✈️ Book a Flight</h3>

    <form wire:submit.prevent="bookFlight" class="space-y-6">
        <div>
            <label for="flight_id" class="block text-sm font-medium text-gray-700 mb-1">
                Select Flight
            </label>
            <select wire:model="flight_id" id="flight_id" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">-- Select a Flight --</option>
                @foreach($flights as $flight)
                    <option value="{{ $flight->id }}">
                        {{ $flight->flight_number }} - {{ $flight->origin }} to {{ $flight->destination }}
                    </option>
                @endforeach
            </select>
        </div>

        <a href="{{ route('create-booking') }}">
            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition duration-200">
                Book Flight
            </button>
        </a>
    </form>

    @if(session()->has('message'))
        <div class="mt-6 p-4 bg-green-100 text-green-800 rounded-md border border-green-300">
            {{ session('message') }}
        </div>
    @endif
</div>
@endsection
