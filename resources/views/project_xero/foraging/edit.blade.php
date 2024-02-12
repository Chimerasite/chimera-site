<x-app-layout>
    <x-slot:header>
        {{ __('Xero Fan Zone - Edit Foraging') }}
    </x-slot>
    <x-slot:options>
        @if (Auth::user() && Auth::user()->is_admin == 1)
            <div class="space-x-2 text-xl">
                <a href="{{ route('xero.foraging') }}">
                    <i class="fa-solid fa-home hover:text-baby-300"></i>
                </a>
            </div>
        @endif
    </x-slot>
    @livewire('xero-foraging-table', ['massedit' => true])
</x-app-layout>
