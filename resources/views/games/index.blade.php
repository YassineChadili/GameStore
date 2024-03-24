<x-app-layout>
    <x-slot name="header">
        {{ __('Games overzicht') }}
    </x-slot>

    <div class="max-w-7xl mx-auto my-8 bg-white shadow overflow-hidden">

        <div class="col-md-6 mt-5 flex justify-center mb-2">
            <div class="form-group">
                <form method="get" action="/search">
                    <div class="flex items-center">
                        <input class="border border-gray-300 rounded-md p-2 mr-2" name="search" placeholder="Zoek..."
                            value="{{ isset($search) ? $search : '' }}">
                        <x-primary-button>
                            Zoek
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
        <div class="px-4 py-5">

            <div class="grid grid-cols-4 gap-4 gap-y-12">
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
