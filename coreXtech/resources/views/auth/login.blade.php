<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input
                    id="email"
                    class="block w-full mt-1"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username"
                />
            </div>

            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input
                    id="password"
                    class="block w-full mt-1"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                />
            </div>

            <div class="flex items-center justify-between">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

                <div class="flex gap-4">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm text-indigo-600 hover:underline">
                            {{ __('Register') }}
                        </a>
                    @endif
                </div>
            </div>

            <div class="flex justify-end">
                <x-button class="w-full sm:w-auto flex justify-center items-center">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
