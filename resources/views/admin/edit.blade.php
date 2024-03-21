<x-app-layout>
    <x-slot name="header">
        {{ __('Game bewerken') }}
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

            <form action="{{ route('admin.update', $game->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

                <div class="shadow overflow-hidden">
                    <div class="px-4 py-5 bg-white flex flex-col gap-6">
                      
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
                            <input type="text" name="name" id="name" class="form-input mt-1 block w-full" value="{{ $game->name }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">Afbeelding:</label>
                            <input type="file" name="image" id="image" class="form-input mt-1 block w-full">
                            <p class="text-gray-600 text-sm mt-1">Huidige afbeelding: <img src="{{ asset($game->image) }}" class="h-10 w-10 inline-block"></p>
                        </div>
        
                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700">Prijs €</label>
                            <input type="number" name="price" id="price" class="form-input mt-1 block w-full" value="{{ $game->price }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="console_ids" class="block text-sm font-medium text-gray-700">Selecteer consoles</label>
                            <select name="console_ids[]" id="console_ids" class="form-multiselect mt-1 block w-full" multiple>
                                @foreach ($consoles as $console)
                                    <option value="{{ $console->id }}" {{ in_array($console->id, $game->consoles()->pluck('consoles.id')->toArray()) ? 'selected' : '' }}>{{ $console->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div>
                            <x-primary-button>
                                Game Bijwerken
                            </x-primary-button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>