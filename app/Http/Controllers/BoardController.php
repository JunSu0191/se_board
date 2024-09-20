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
        return view('boards.index',['board' => $board]);
    }

    public function insertBoard(Request $request)
    {
        try {
            // 요청 데이터 검증
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
            ]);

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

    public function selectboard($id) {
        $board = Board::with('user')
        ->where('id',$id)->first();

        // dd($data);

        return view('boards.show',['board' => $board]);
    }

    public function edit($id)
    {
        $board = Board::findOrFail($id);
        return view('boards.edit', compact('board'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $board = Board::findOrFail($id);
        $board->title = $request->input('title');
        $board->content = $request->input('content');
        $board->save();

        return redirect()->route('boards.show', $id)->with('success', '게시물이 수정되었습니다.');
    }

    public function delete($id) {
        Board::findOrFail($id)->delete();
        return redirect()->route('boards')->with('success', '게시물이 삭제되었습니다.');
    }
}
