<x-app-layout>
    <x-slot:header>
        {{ __('Home') }}
    </x-slot>

    <div>
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    {{ __("Welcome to Chimerasite.com!") }}

                    <div class="flex items-center space-x-6">
                        <i class="fa-solid fa-2xl fa-triangle-exclamation mt-4"></i>

                        <p class="mt-4">
                            {{ __("Please keep in mind that this website is very much under construction and a work in progress!") }}<br>
                            {{ __("Everything is still a concept, so things may change around.") }}
                        </p>
                    </div>

                    <p class="text-sm mt-8">
                        {{ __("If you run into any issues please let me know by messaging me on social media (@Chimerasite) or by sending an email to chimerasite22@gmail.com") }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
