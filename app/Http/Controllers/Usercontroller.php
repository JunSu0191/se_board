<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    public function selectuser() {
        $user = User::find(1);
        return view('dashboard',['user' => $user]);
    }
}
