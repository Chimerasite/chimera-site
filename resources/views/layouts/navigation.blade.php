<nav x-data="{ open: false }" class="z-50 sticky top-0">
    <!-- Primary Navigation Menu -->
    <div class="hidden lg:flex flex-col justify-between w-64 bg-gray-800 text-white font-primary h-full sticky top-0">
        <!-- Navigation Links -->
        <div class="flex flex-col space-y-3 mx-6 my-6">
            <x-nav.link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-nav.link>
            @if(Auth::user() && Auth::user()->is_admin == True)
                <x-nav.link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav.link>
            @endif
        </div>

        <!-- Account Data -->
        <div class="mx-6 my-6">
            <hr class="my-6">
            @if (Auth::user())
                <x-nav.dropdown>
                    <x-slot:trigger>
                        <button type="button" class="px-1 text-base font-medium hover:text-baby-300 active:text-baby-500 focus:outline-none transition ease-in-out duration-150">
                            {{ Auth::user()->name }}

                            <i class="fa-solid fa-angle-down fa-xs ml-1"></i>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-nav.dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-nav.dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-nav.dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-nav.dropdown-link>
                        </form>
                    </x-slot>
                </x-nav.dropdown>
            @else
                <a href="{{ route('login') }}" class="hover:text-baby-300">Login</a>
            @endif
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div class="lg:hidden flex items-center w-screen h-12 bg-gray-800 font-primary">
        <!-- Hamburger -->
        <div class="flex items-center justify-end w-screen text-white text-2xl px-4 z-50">
            <button @click="open = ! open">
                <i :class="{'hidden': open, 'inline-flex': ! open }" class="fa-solid fa-bars"></i>
                <i :class="{'hidden': ! open, 'inline-flex': open }" class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div x-show="open" class="absolute top-0 z-40 flex flex-col justify-between w-screen h-extra bg-gray-800 text-white">
            <!-- Navigation Links -->
            <div class="flex flex-col space-y-3 mx-10 my-6">
                <x-nav.responsive-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav.responsive-link>
                <x-nav.responsive-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav.responsive-link>
            </div>

            <!-- Account Data -->
            <div class="mx-10 my-10">
                <hr class="my-6">
                @if (Auth::user())
                    <x-nav.dropdown>
                        <x-slot:trigger>
                            <button type="button" class="px-1 text-base font-medium hover:text-baby-300 active:text-baby-500 focus:outline-none transition ease-in-out duration-150">
                                {{ Auth::user()->name }}

                                <i class="fa-solid fa-angle-down fa-xs ml-1"></i>
                            </button>
                        </x-slot>

                        <x-slot:content>
                            <x-nav.dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-nav.dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-nav.dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-nav.dropdown-link>
                            </form>
                        </x-slot>
                    </x-nav.dropdown>
                @else
                    <a href="{{ route('login') }}" class="hover:text-baby-300">Login</a>
                @endif
            </div>
        </div>
    </div>
</nav>
