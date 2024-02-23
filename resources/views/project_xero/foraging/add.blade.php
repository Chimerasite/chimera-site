<x-app-layout>
    <x-slot:header>
        {{ __('Xero Fan Zone - Add Foraging') }}
    </x-slot>
    <x-slot:options>
        <div class="space-x-2 text-xl">
            <a href="{{ route('xero.foraging') }}">
                <i class="fa-solid fa-home hover:text-baby-300"></i>
            </a>
        </div>
    </x-slot>
    <div class="bg-red-600 rounded-md shadow-md lg:w-1/2 m-auto text-white p-4 text-center">
        <i class="fa-solid fa-triangle-exclamation mr-2"></i>
            Please do not add data from before February 1st 2024
        <i class="fa-solid fa-triangle-exclamation ml-2"></i>
    </div>
    @livewire('ProjectXero.Foraging.Submit')
</x-app-layout>