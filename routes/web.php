<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RoomController;
use App\Providers\RouteServiceProvider;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/posts', [PostController::class,'index'])->name('posts.index');
Route::get('/posts/{post_id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/', function (){return redirect(RouteServiceProvider::HOME);})->name('home');
Route::get('/dashboard', function () {
    return view('posts.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //投稿のいいね機能
    Route::post('/posts/like/{post_id}', [LikeController::class,'store'])->name('posts.like');
    Route::delete('/posts/unlike/{post_id}', [LikeController::class,'destroy'])->name('posts.unlike');
    //投稿
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/create', [PostController::class,'create'])->name('posts.create');
    Route::delete('/posts/{post_id}',[PostController::class, 'destroy'])->name('post.destroy');
    //投稿のコメント作成
    Route::get('/posts/{post_id}/comments', [CommentController::class, 'create'])->name('comments.create');
    Route::post('/posts/{post_id}/comments',[CommentController::class, 'store'])->name('comments.store');
    //プロフィール変更
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //メッセージ機能
    Route::get('/rooms',[RoomController::class, 'index'])->name('rooms.index');
    Route::get('/rooms/{room_id}',[RoomController::class,'show'])->name('rooms.show');
    //メッセージ保存
    Route::post('/message',[MessageController::class,'store'])->name('messages.store');
});

require __DIR__.'/auth.php';