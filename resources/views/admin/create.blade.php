<x-app-layout>
    <x-slot name="header">
        {{ __('Nieuwe game toevoegen') }}
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

            <form action="{{ route('admin.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="shadow overflow-hidden">
                    <div class="px-4 py-5 bg-white flex flex-col gap-6">
                        <a href="{{ route('admin.index') }}" enctype="multipart/form-data">Terug</a>
    
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
                            <textarea name="name" id="name" rows="3"
                                class="mt-1 p-2 focus:ring-yellow focus:border-yellow block shadow-sm border-gray-300 rounded-md w-full" required></textarea>
                        </div>

                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700 mt-2">Afbeelding:</label>
                            <input type="file" name="image"
                                class="mt-1 p-2 focus:ring-yellow focus:border-yellow block w-full shadow-sm border-gray-300 rounded-md"
                                required>
                        </div>
        
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700">Prijs €</label>
                            <input type="number"name="price" id="price"
                                class="mt-1 p-2 focus:ring-yellow focus:border-yellow block w-full shadow-sm border-gray-300 rounded-md"
                                required>
                        </div>

                        <div>
                            <label for="console_ids" class="block text-sm font-medium text-gray-700">Selecteer consoles</label>
                            <select name="console_ids[]" id="console_ids"
                                class="mt-1 p-3 focus:ring-yellow focus:border-yellow block w-full shadow-sm border-gray-300 rounded-md"
                                required multiple>
                                @foreach ($consoles as $console)
                                    <option value="{{ $console->id }}">{{ $console->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <x-primary-button>
                                Game Toevoegen
                            </x-primary-button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>