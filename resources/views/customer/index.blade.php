<x-app-layout>
    <x-slot name="header">
        {{ __('Mijn aankopen overzicht') }}
    </x-slot>
    
    <div class="max-w-7xl mx-auto my-8 bg-white shadow overflow-hidden">
        @if (session('message'))
            <div class="bg-yellow text-gray-800 font-bold p-4">
                <p>{{ session('message') }}</p>
            </div>
        @endif
        <div class="px-4 py-5">
            <x-table :columns="['Naam', 'Gekochte game', 'Adres', 'Datum']">
                <x-slot name="title">
                    Aankopen:
                </x-slot>
                <x-slot name="paginationLinks">
                    {{ $invoices->links() }}
                </x-slot>
                @foreach ($invoices as $invoice)
                    <tr class="hover:bg-gray-200">
                        <x-table.td>{{ $invoice->user->name }}</x-table.td>
                        <x-table.td>{{ $invoice->game->name }}</x-table.td>
                        <x-table.td>{{ $invoice->street }}, {{$invoice->zip }} {{$invoice->city }}</x-table.td>
                        <x-table.td>{{ $invoice->created_at }}</x-table.td>
                    </tr>
                @endforeach
            </x-table>
        </div>
    </div>
</x-app-layout>
