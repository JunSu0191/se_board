<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('게시판') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-12 flex justify-center">
                    <div> <!-- 너비와 높이 고정 -->
                        <x-table> <!-- 테이블 너비와 높이 고정 -->
                            <x-thead class="">
                                <tr style="text-align: center;">
                                    <x-th :value="__('번호')"/>
                                    <x-th :value="__('일정유무')"/>
                                    <x-th style="width: 300px;" :value="__('제목')"/>
                                    <x-th :value="__('작성자')"/>
                                    <x-th :value="__('등록일자')"/>
                                    <x-th :value="__('수정일자')"/>
                                    <x-th :value="__('조회수')"/>
                                </tr>
                            </x-thead>
                            <tbody> <!-- 본문 높이 제한 및 스크롤 -->
                                @foreach ( $board as $item )
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" style="text-align: center;">
                                    <x-tbody value="{{($board->currentPage() - 1) * $board->perPage() + $loop->iteration}}"/>
                                    <x-tbody value="있음"/>
                                    <x-tbody>
                                        <a href="{{ route('boards.show', ['id' => $item->id]) }}">{{ $item->title }}</a>
                                    </x-tbody>
                                    <x-tbody value="{{$item->user->name}}"/>
                                    <x-tbody value="{{\Carbon\Carbon::parse($item->created_at)->format('Y-m-d')}}"/>
                                    <x-tbody value="{{\Carbon\Carbon::parse($item->updated_at)->format('Y-m-d')}}"/>
                                    <x-tbody value="{{$item->views}}"/>
                                </tr>
                                @endforeach
                            </tbody>
                        </x-table>
                        <div class="flex justify-end p-2">
                            <a href="insertboards">
                                <x-primary-button>
                                    등록
                                </x-primary-button>
                            </a>
                        </div>
                        <div class="pagination">
                            {{ $board->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
