<!-- resources/views/auth/email-found.blade.php -->

<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="mb-4 text-lg text-gray-600 dark:text-gray-400">
        {{ __('이메일 찾기') }}
    </div>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('당신의 이메일은') }}
            <strong>{{ $email }} 입니다.</strong>
        </div>

    <div class="flex items-center justify-end mt-4">
        <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">
            {{ __('비밀번호 찾기') }}
        </a>
    </div>
</x-guest-layout>
