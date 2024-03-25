<x-app-layout>
    <x-slot name="header">
        {{ __('Game kopen') }}
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto">
            @if ($errors->any())
                <div class="bg-red-500 text-white font-bold p-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('invoices.store') }}" method="POST">
                @csrf
                <div class="shadow overflow-hidden">
                    <div class="px-4 py-5 bg-white flex flex-col gap-6">
                        <a href="{{ route('games.index') }}">Terug</a>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Spel</label>
                            <p class="mt-1 p-2 focus:ring-yellow focus:border-yellow block w-full shadow-sm border-gray-300 rounded-md">{{ $game->name }}</p>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Prijs</label>
                            <p class="mt-1 p-2 focus:ring-yellow focus:border-yellow block w-full shadow-sm border-gray-300 rounded-md">€{{ $game->price }}</p>
                        </div>

                        <div>
                            <label class="block text-lg font-medium text-gray-700">Adres</label>
                            <label for="street" class="block text-sm font-medium text-gray-700">Straat</label>
                            <input type="text" name="street" id="street" class="mt-1 p-2 focus:ring-yellow focus:border-yellow block w-full shadow-sm border-gray-300 rounded-md" required>
     
                            <label for="zip" class="block text-sm font-medium text-gray-700">Postcode</label>
                            <input type="text" name="zip" id="zip" class="mt-1 p-2 focus:ring-yellow focus:border-yellow block w-full shadow-sm border-gray-300 rounded-md" required>
                       
                            <label for="city" class="block text-sm font-medium text-gray-700">Stad</label>
                            <input type="text" name="city" id="city" class="mt-1 p-2 focus:ring-yellow focus:border-yellow block w-full shadow-sm border-gray-300 rounded-md" required>
                        </div>

                        <input type="hidden" name="game_id" value="{{ $game->id }}">

                        <div>
                            <x-primary-button>
                                Kopen
                            </x-primary-button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
