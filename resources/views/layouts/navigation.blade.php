<nav class="flex justify-between max-w-7xl mx-auto">
    <!-- Name + Slogan -->
    <div class="flex items-center p-5 text-4xl">
        <a href="/" class="flex gap-x-1">
            <h1 class="">Game</h1>
            <h1 class="font-bold">Store</h1>
        </a>
    </div>

    <div class="flex items-center space-x-8">
        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            @auth

            @if(auth()->user()->admin)
                <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                    {{ __('Admin Dashboard') }}
                </x-nav-link>
            @else
                <x-nav-link :href="route('customer.index')" :active="request()->routeIs('customer.index')">
                    {{ __('Klanten Dashboard') }}
                </x-nav-link>
            @endif
            @endauth
            
            <x-nav-link :href="route('games.index')" :active="request()->routeIs('games.index')">
                {{ __('Games') }}
            </x-nav-link>
            <x-nav-link>
                {{ __('Contact') }}
            </x-nav-link>
        </div>

        <!-- Authentication Links -->
        @guest
            {{-- Display login link if user is not authenticated --}}
            <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                {{ __('Login') }}
            </x-nav-link>
            
            {{-- Display register link if user is not authenticated --}}
            <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                {{ __('Register') }}
            </x-nav-link>
        @else
            <!-- Always show logout link -->
            <x-nav-link :href="route('logout')" class="cursor-pointer"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </x-nav-link>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
        @endguest
    </div>
</nav>
