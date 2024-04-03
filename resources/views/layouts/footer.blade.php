<nav class="flex justify-start py-4 px-10 text-xs gap-20">
    <div class="flex items-center p-5 text-4xl">
        <a href="/" class="flex gap-x-1">
            <h1 class="">Game</h1>
            <h1 class="font-bold">Store</h1>
        </a>
    </div>

    <div>
        <h4><b>Contact</b></h4>
        <p class="text-gray-500">+31(0)76-5733444</p>
        <p class="text-gray-500">info@GameStore.nl</p>
    </div>
    <div class="flex flex-col">
        <h4><b>Locatie</b></h4>
        <a href="https://maps.app.goo.gl/FNuNL1VpBD4nbQmn6" :active="''">
            {{ __('Terheijdenseweg 350') }}
        </a>

        <a href="https://maps.app.goo.gl/FNuNL1VpBD4nbQmn6" :active="''">
            {{ __('4826 AA Breda') }}
        </a>

    </div>
</nav>