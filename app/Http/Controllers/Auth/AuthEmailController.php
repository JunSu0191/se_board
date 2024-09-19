<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class AuthEmailController extends Controller
{
    public function create(): View
    {
        return view('auth.forgot-email');
    }

    public function store(Request $request)
    {
        // 입력 검증
        $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'string']
        ]);

        // 사용자 검색
        $user = User::where('name', $request->name)
                    ->where('phone', $request->phone)
                    ->first();

        if ($user) {
            // 이메일을 찾은 경우
            // $request->session('email', $user->email);

            return redirect()->route('email.found')->with('email', $user->email);
        } else {
            // 이메일을 찾지 못한 경우
            return redirect()->back()
                             ->withInput($request->only('name', 'phone'))
                             ->withErrors(['phone' => __('입력하신 이름과 전화번호에 해당하는 이메일을 찾을 수 없습니다.')]);
        }
    }

    public function emailFound(Request $request)
    {
        $email = $request->session()->get('email');

        return view('auth.email-found', ['email' => $email]);
    }
}
