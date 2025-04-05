<div class="max-w-2xl mx-auto p-6 mt-10 bg-white shadow-xl rounded-xl">
    <h3 class="text-2xl font-bold mb-6 text-gray-800">🛫 Create a Flight</h3>

    <form wire:submit.prevent="submit" class="space-y-6">
        @csrf

        <div>
            <label for="flight_number" class="block text-sm font-medium text-gray-700 mb-1">Flight Number</label>
            <input type="text" wire:model="flight_number" id="flight_number" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            @error('flight_number') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="origin" class="block text-sm font-medium text-gray-700 mb-1">Origin</label>
            <input type="text" wire:model="origin" id="origin" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            @error('origin') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="destination" class="block text-sm font-medium text-gray-700 mb-1">Destination</label>
            <input type="text" wire:model="destination" id="destination" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            @error('destination') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="departure_date" class="block text-sm font-medium text-gray-700 mb-1">Departure Date</label>
            <input type="date" wire:model="departure_date" id="departure_date" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            @error('departure_date') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
            <input type="number" wire:model="price" step="0.01" id="price" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            @error('price') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-md shadow-md transition duration-200">
            Create Flight
        </button>
    </form>

    @if(session()->has('message'))
        <div class="mt-6 p-4 bg-green-100 text-green-800 rounded-md border border-green-300">
            {{ session('message') }}
        </div>
    @endif
</div>
