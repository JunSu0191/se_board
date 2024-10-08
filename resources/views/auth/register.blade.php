<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- 이메일 -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('이메일')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- 비밀번호 -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('비밀번호')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- 비밀번호 확인 -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('비밀번호 확인')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

          <!-- 이름 -->
          <div>
            <x-input-label for="name" :value="__('이름')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- 부서명 -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('부서명')" />
            <x-text-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('department')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('department')" class="mt-2" />
        </div>

        <!-- 전화번호 -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('전화번호')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('로그인을 하시겠습니까?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('회원가입') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
