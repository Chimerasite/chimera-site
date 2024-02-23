<x-app-layout>
    <x-slot name=header>
        {{ __('Xero Fan Zone') }}
    </x-slot>
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden flex md:flex-row flex-col justify-center shadow-sm rounded-md md:p-8 p-4">
            <img class="md:h-36 object-scale-down" src="{{ asset('assets/img/xero_logo.png') }}">
            <div class="md:px-12 px-6">
                <h2 class="text-2xl">Welcome to the Project Xero Fan Zone</h2>
                <p class="mt-1 text-sm">
                    *{{ __("This is fan created space and not an offical part of Project Xero") }}
                </p>

                <p class="mt-4">
                    {{ __("Project Xero is an ARPG concept created by NeonSlushie and ScrapTeeth.") }} <br>
                    {{ __("Check it out at their website:") }} <a href="https://projectxero.org/info/about" class="underline"> projectxero.org </a>
                </p>
            </div>
        </div>
        <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-8 w-full mb-8 mt-8">
            <a href="{{ route('xero.foraging') }}">
                <div class="col-span-1 bg-white overflow-hidden shadow-sm rounded-md md:p-8 p-4 text-center hover:bg-baby-300 ">
                        <h3 class="text-xl mb-3">Foraging Data</h3>
                        <p class="text-sm">
                            A place to view collected foraging data and submit new forages.
                        </p>
                </div>
            </a>
        </div>

    </div>

</x-app-layout>
