<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\BoardController;
use App\Mail\LoginMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Route::get('test', function () {
//    Mail::to('tlswsnstn0191@naver.com')->send(
//     new LoginMail()
//    );
//    return 'Done';
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boards',  [BoardController::class, 'boardlist'])
->middleware(['auth', 'verified'])
->name('boards');

// Route::get('/boards', [BoardController::class, 'boardlist'])->name('boards');


Route::get('/schedules', function () {
    return view('schedules');
})->middleware(['auth', 'verified'])->name('schedules');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/insertboards', function () {
    return view('insertboards');
});

Route::post('/insertboard', [BoardController::class, 'insertBoard'])->name('boards.insert');

require __DIR__.'/auth.php';
