<x-app-layout>
    <x-slot:header>
        {{ __('Xero Fan Zone - Foraging') }}
    </x-slot>
    <x-slot:options>
        @if (Auth::user() && Auth::user()->is_admin == 1)
            <div class="space-x-2 text-xl">
                <a href="{{ route('xero.foraging-edit') }}">
                    <i class="fa-solid fa-edit hover:text-baby-300"></i>
                </a>
            </div>
        @endif
    </x-slot>
    @livewire('xero-foraging-table', ['massedit' => false])
</x-app-layout>
