<x-app-layout>
    <x-slot name="header">
        {{ __('Game Details') }}
    </x-slot>

    <div class="max-w-7xl mx-auto my-8 bg-white shadow overflow-hidden">
        <div class="px-4 py-5">
            <div class="border shadow text-center p-4">
                <div>{{ $game->name }}</div>
                <img src="{{ asset($game->image) }}" alt="Game Image" class="mt-2 mx-auto" style="width: 100px;">
                <div class="mt-2 font-bold">€{{ $game->price }}</div>
                <div class="mt-2">
                    Consoles:
                    {{ implode(', ', $game->consoles->pluck('name')->toArray()) }}
                </div>
                <div class="pt-5">
                    <x-primary-button>
                        <a href="{{ route('invoices.create', ['id' => $game->id]) }}">Game kopen</a>
                    </x-primary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
