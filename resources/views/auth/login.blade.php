<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input.label for="email" :value="__('Email')" />
            <x-input.text id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input.error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input.label for="password" :value="__('Password')" />

            <x-input.text id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input.error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex mt-4 justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-400 text-midnight-500 shadow-sm focus:ring-midnight-500 " name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-500 hover:text-baby-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="flex items-center justify-end mt-8">
            <a class="underline text-sm text-gray-600 hover:text-baby-500" href="{{ route('register') }}">
                {{ __('No account?') }}
            </a>

            <x-button.primary class="ml-3">
                {{ __('Log in') }}
            </x-button.primary>
        </div>
    </form>
</x-guest-layout>
