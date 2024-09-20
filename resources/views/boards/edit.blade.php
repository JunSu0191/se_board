<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('게시물 수정') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4">
                    <form action="{{ route('boards.update', $board->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- PUT 메서드 사용 -->
                        <div class="mb-4">
                            <strong>
                                <x-label value="{{$board->user->name}}"/>
                            </strong>
                        </div>
                        <div class="mb-4">
                            <x-input-label for="title" :value="__('제목')"/>
                            <x-text-input id="title" class="block mt-1 w-full"
                                            type="text"
                                            name="title"
                                            value="{{ $board->title }}"
                                            required/>
                        </div>
                        <div class="mb-4">
                            <x-input-label for="content" :value="__('내용')"/>
                            <x-textarea id="content" class="block mt-1 w-full"
                                        name="content"
                                        required>
                                        {{ $board->content }}
                            </x-textarea>
                        </div>

                        <div class="flex justify-end">
                            <x-primary-button type="submit">수정</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
