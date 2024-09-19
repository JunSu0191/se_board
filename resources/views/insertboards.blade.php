<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('게시물 등록') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-12 flex justify-center">
                    <div class="overflow-x-auto">
                        <form method="POST" action="{{ route('boards.insert') }}">
                            @csrf
                            <div class="mt-4">
                                <x-label value="{{Auth::user()->name}}"/>
                            </div>
                            <!-- 비밀번호 -->
                            <div class="mt-4">
                                <x-input-label for="title" :value="__('제목')" />

                                <x-text-input id="title" class="block mt-1 w-full"
                                                type="text"
                                                name="title"
                                                required/>

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="content" :value="__('내용')" />

                                <x-text-input id="content" class="block mt-1 w-full"
                                                type="text"
                                                name="content"
                                                required/>

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="flex justify-end p-4">
                                <x-primary-button>
                                    {{ __('등록') }}
                                </x-primary-button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
