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
            </div>
        </div>
    </div>
</x-app-layout>
