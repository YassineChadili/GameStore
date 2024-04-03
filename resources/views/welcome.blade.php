<x-app-layout>
    <x-slot name="header">
        Welkom bij GameStore!
    </x-slot>

    <div class="relative">
        <img src="{{ asset('img/gamebanner.jpg') }}" alt="Large Image" class="w-full h-72 md:h-96 lg:h-120 object-cover">
    </div>
    
    <div class="my-8 bg-white shadow overflow-hidden">
        <div class="max-w-7xl mx-auto pt-4">
            <h1 class="font-bold text-2xl">Informatie:</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa.</p>
        </div>
        <div class="px-4 py-5">
            <div class="max-w-7xl mx-auto grid grid-cols-4 gap-4 gap-y-12">
                @foreach ($games as $game)
                    <div class="border shadow text-center p-4 hover:bg-gray-200 flex flex-col justify-between">
                        <div class="flex-1">
                            <div class="h-full flex flex-col justify-between">
                                <div>{{ $game->name }}</div>
                                <img src="{{ $game->image }}" alt="Game Image" class="mt-2 mx-auto" style="width: 100px;">
                                <div class="mt-2 font-bold">€{{ $game->price }}</div>
                                <div class="mt-2">
                                    Consoles:
                                    {{ implode(', ', $game->consoles->pluck('name')->toArray()) }}
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <x-primary-button>
                                <a href="{{ route('games.show', ['game' => $game]) }}">Game bekijken</a>
                            </x-primary-button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
