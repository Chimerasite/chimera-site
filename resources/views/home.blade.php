<x-app-layout>
    <x-slot:header>
        {{ __('Home') }}
    </x-slot>

    <div>
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    {{ __("Welcome to Chimerasite.com") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
