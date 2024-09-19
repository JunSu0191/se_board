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
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-gray-300" style="table-layout: fixed; width: 1100px;"> <!-- 테이블 너비와 높이 고정 -->
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b border-gray-300">
                                <tr style="text-align: center;">
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300">번호</th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300">일정 유무</th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300" style="width: 300px;">제목</th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300">작성자</th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300">등록일자</th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300">수정일자</th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300">조회수</th>
                                </tr>
                            </thead>
                            <tbody> <!-- 본문 높이 제한 및 스크롤 -->
                                @foreach ( $board as $item )
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" style="text-align: center;">
                                    <td class="px-6 py-4 border-b border-gray-300">{{($board->currentPage() - 1) * $board->perPage() + $loop->iteration}}</td>
                                    <td class="px-6 py-4 border-b border-gray-300">있음</td>
                                    <td class="px-6 py-4 border-b border-gray-300">{{$item->title}}</td>
                                    <td class="px-6 py-4 border-b border-gray-300">{{$item->user->name}}</td>
                                    <td class="px-6 py-4 border-b border-gray-300">{{\Carbon\Carbon::parse($item->created_at)->format('Y-m-d')}}</td>
                                    <td class="px-6 py-4 border-b border-gray-300">{{\Carbon\Carbon::parse($item->updated_at)->format('Y-m-d')}}</td>
                                    <td class="px-6 py-4 border-b border-gray-300">{{$item->views}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
