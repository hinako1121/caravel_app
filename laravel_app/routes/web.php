<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('post/create',[PostController::class,'create'])
->middleware('auth','admin');
=======
Route::get('post/create',[PostController::class,'create']);
>>>>>>> parent of f9b0901 (5/19)
=======
Route::get('post/create',[PostController::class,'create']);
>>>>>>> parent of f9b0901 (5/19)
=======
Route::get('post/create',[PostController::class,'create'])
->middleware('auth','admin');
>>>>>>> 560a188759879317f0cc7d7be7ea38b738485fd3

Route::post('post',[PostController::class,'store'])
->name('post.store');

require __DIR__.'/auth.php';
