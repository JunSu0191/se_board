<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('게시판') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- 테이블 -->
                    <table class="w-full table-auto border-collapse">
                        <thead>
                            <tr class="bg-gray-200 dark:bg-gray-700">
                                <th class="border px-4 py-2">번호</th>
                                <th class="border px-4 py-2">제목</th>
                                <th class="border px-4 py-2">작성자</th>
                                <th class="border px-4 py-2">등록일자</th>
                                <th class="border px-4 py-2">조회수</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="border px-4 py-2">1</td>
                                <td class="border px-4 py-2">
                                    <a href="#" class="text-blue-500 hover:underline mt">게시글 제목 1</a>
                                </td>
                                <td class="border px-4 py-2 text-center">작성자 1</td>
                                <td class="border px-4 py-2 text-center">2024-09-19</td>
                                <td class="border px-4 py-2 text-center">123</td>
                            </tr>
                            <tr class="bg-gray-50 dark:bg-gray-700">
                                <td class="border px-4 py-2 text-center">2</td>
                                <td class="border px-4 py-2">
                                    <a href="#" class="text-blue-500 hover:underline">게시글 제목 2</a>
                                </td>
                                <td class="border px-4 py-2 text-center">작성자 2</td>
                                <td class="border px-4 py-2 text-center">2024-09-18</td>
                                <td class="border px-4 py-2 text-center">98</td>
                            </tr>
                            <!-- 추가 게시글 -->
                        </tbody>
                    </table>
                        <!-- 등록 버튼 -->
                        <div class="flex justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('등록') }}
                            </x-primary-button>
                        </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
