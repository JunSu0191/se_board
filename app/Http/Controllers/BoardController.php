<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class BoardController extends Controller
{
    public function boardlist() {
        $board = Board::with('user')->paginate(10);

        return view('boards',['board' => $board]);
    }

    public function insertBoard(Request $request)
    {
        try {
            // 요청 데이터 검증
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
            ]);

            // 현재 사용자 ID 가져오기
            $user_name = Auth::user()->name;

            $user = User::where('name',$user_name)->first();

            // 게시글 삽입
            Board::create([
                'title' => $validated['title'],
                'email' => $user->email,
                'content' => $validated['content'],
                'views' => 0,
            ]);

            return redirect()->route('boards')->with('success', '게시글이 성공적으로 등록되었습니다.');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}

