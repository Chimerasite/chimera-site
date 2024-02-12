<x-app-layout>
    <x-slot name=header>
        {{ __('Xero Fan Zone') }}
    </x-slot>
    <a href="{{ route('xero.foraging') }}" class="underline hover:text-baby-500">
        Foraging Data
    </a>
</x-app-layout>
