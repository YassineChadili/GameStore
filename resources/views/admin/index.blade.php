<x-app-layout>
    <x-slot name="header">
        {{ __('Beheerder overzicht') }}
    </x-slot>
    
    <div class="max-w-7xl mx-auto my-8 bg-white shadow overflow-hidden">
        <div class="px-4 py-5">

            <x-table :columns="['Naam', 'Foto', 'Prijs']">
                <x-slot name="title">
                    Games:
                </x-slot>
                <x-slot name="paginationLinks">
                    <!-- Display pagination links -->
                    {{ $games->links() }}
                </x-slot>
                @foreach ($games as $game)
                    <tr class="hover:bg-gray-200">
                        <x-table.td>{{ $game->name }}</x-table.td>
                        <x-table.td>{{ $game->image }}</x-table.td>
                        <x-table.td>{{ $game->price }}</x-table.td>
                    </tr>
                @endforeach
            </x-table>
        </div>
    </div>
</x-app-layout>
