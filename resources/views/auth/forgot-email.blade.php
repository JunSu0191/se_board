<x-guest-layout>
    <div class="mb-4 text-lg text-gray-600 dark:text-gray-400">
        {{ __('이메일 찾기') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('email.find') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="name" :value="__('이름')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>
        <div>
            <x-input-label for="phone" :value="__('전화번호')" class="mt-2" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('이메일 찾기') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
