<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('이메일')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="password" :value="__('비밀번호')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-center mt-3 space-x-8">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('아이디 저장') }}</span>
            </label>

            <label for="auto_login" class="inline-flex items-center">
                <input id="auto_login" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="auto_login">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('자동 로그인') }}</span>
            </label>
        </div>

        <x-login-button class="mt-3">
            {{ __('로그인') }}
        </x-login-button>
    </form>

    <form method="GET" action="{{ route('register') }}">
        <x-login-button class="mt-2">
            {{ __('회원가입') }}
        </x-login-button>
    </form>

    <div class="flex justify-center mt-3 space-x-8">
        <a href="{{ route('email.request')}}" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
            {{ __('아이디 찾기') }}
        </a>
        <a href="{{ route('password.request') }}"
            class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
            {{ __('비밀번호 찾기') }}
        </a>
    </div>
</x-guest-layout>
