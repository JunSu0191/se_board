<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('게시물 상세보기') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 relative" style="height: 600px">
                    <div class="border-b border-gray-200 dark:border-gray-700 pb-4">
                        <h1 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-4">제목: {{ $board->title }}</h1>
                        <x-label class="mb-4" value="{{ $board->user->name }}"/>
                    </div>
                    <div class="mt-4">
                        <div class="text-gray-800 dark:text-gray-200" style="height: 400px">
                            {{ $board->content }}
                        </div>
                    </div>
                </div>
                <div class="mt-4 flex justify-end p-2">
                    <a href="{{ route('boards')}}">
                    <x-primary-button>목록</x-primary-button>
                    </a>
                    @if($board->user->id == Auth::user()->id)
                    <a href="{{ route('boards.edit', $board->id) }}">
                    <x-secondary-button>수정</x-secondary-button>
                    </a>
                    <form action="{{ route('boards.delete', $board->id) }}" method="POST" onsubmit="return confirm('정말 삭제하시겠습니까?');">
                        @csrf
                        @method('DELETE')
                        <x-danger-button type="submit">삭제</x-danger-button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
