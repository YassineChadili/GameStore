<x-app-layout>
    <x-slot name="header">
        {{ __('Beheerder overzicht') }}
    </x-slot>
    
    <div class="max-w-7xl mx-auto my-8 bg-white shadow overflow-hidden">
        @if (session('message'))
            <div class="bg-yellow text-gray-800 font-bold p-4">
                <p>{{ session('message') }}</p>
            </div>
        @endif
        <div class="px-4 py-5">
            <x-table :columns="['Naam', 'Foto', 'Prijs', 'Consoles']">
                <x-slot name="title">
                    Games overzicht:
                </x-slot>
                <x-slot name="button">
                    <a href="{{ route('admin.create') }}">Game Toevoegen</a>
                </x-slot>
                <x-slot name="paginationLinks">
                    {{ $games->links() }}
                </x-slot>
                @foreach ($games as $game)
                    <tr class="hover:bg-gray-200">
                        <x-table.td>{{ $game->name }}</x-table.td>
                        <x-table.td><img src="{{ $game->image }}" alt="Game Image" width=100px></x-table.td>
                        <x-table.td>€{{ $game->price }}</x-table.td>
                        <x-table.td>
                            {{ implode(', ', $game->consoles->pluck('name')->toArray()) }}
                        </x-table.td>
                    </tr>
                @endforeach
            </x-table>
        </div>
    </div>
</x-app-layout>
