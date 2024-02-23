<x-app-layout>
    <x-slot:header>
        {{ __('Xero Fan Zone - Foraging') }}
    </x-slot>
    <x-slot:options>
        @if (Auth::user())
            <div class="space-x-3 text-xl">
                <a href="{{ route('xero.foraging-add') }}">
                    <i class="fa-solid fa-circle-plus hover:text-baby-300"></i>
                </a>
                @if (Auth::user() && Auth::user()->is_admin == 1)
                    <a href="{{ route('xero.foraging-edit') }}">
                        <i class="fa-solid fa-edit hover:text-baby-300"></i>
                    </a>
                @endif
            </div>
        @endif
    </x-slot>
    {{-- <a href="{{ route('xero.home') }}">
        <i class="fa-solid fa-xs fa-chevron-left"></i> {{ __('Return') }}<br><br>
    </a> --}}
    @livewire('ProjectXero.Foraging.Table', ['massedit' => false])
</x-app-layout>
