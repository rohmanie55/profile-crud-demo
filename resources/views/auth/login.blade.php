<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-lock"></i></span>
          Login
        </p>
    </header>
    <div class="card-content">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="field spaced">
                <x-input-label for="email" :value="__('Username')" />
                <x-text-input 
                    left="<i class='ri-user-line'></i>" 
                    id="username" 
                    class="block mt-1 w-full" 
                    name="username" 
                    :error="$errors->get('username')"
                    :value="old('username')" 
                    required autofocus autocomplete="username" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" 
                    left="<i class='ri-admin-line'></i>" 
                    class="block mt-1 w-full"
                    type="password"
                    name="password"
                    :error="$errors->get('password')"
                    required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button color="blue" class="ms-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </div>
</x-guest-layout>
