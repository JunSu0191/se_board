<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $customMessages = [
            'name.required' => '이름을 입력해 주세요.',
            'email.required' => '이메일을 입력해 주세요.',
            'email.email' => '올바른 이메일 형식을 입력해 주세요.',
            'email.unique' => '이미 사용 중인 이메일입니다.',
            'password.required' => '비밀번호를 입력해 주세요.',
            'password.min' => '비밀번호를 8자리 이상으로 입력해 주세요.',
            'password.confirmed' => '비밀번호가 일치하지 않습니다.',
            'phone.required' => '전화번호를 입력해 주세요.',
            'phone.regex' => '전화번호는 01X로 시작하고 11~12 자리여야 합니다.',
            'department.required' => '부서명을 입력해 주세요.',
        ];

        $data = $request->validate([
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'regex:/^01[0-9]{9,10}$/'],
            'department' => ['required', 'string', 'max:255']
        ], $customMessages);

        // 추가 커스텀 로직
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($request->password),
            'phone' => $data['phone'],
            'department' => $request->department,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('boards', absolute: false));
    }
}
