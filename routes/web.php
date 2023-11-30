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
//ゲストアカウント
Route::get('/posts', [PostController::class,'index'])->name('posts.index');
Route::get('/posts/{post_id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/', function (){return redirect(RouteServiceProvider::HOME);})->name('home');
Route::get('/dashboard', function () {return view('posts.index');})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::prefix('posts')->group(function(){
        Route::post('/like/{post_id}', [LikeController::class,'store'])->name('posts.like');
        Route::delete('/unlike/{post_id}', [LikeController::class,'destroy'])->name('posts.unlike');
        //投稿
        Route::post('/', [PostController::class, 'store'])->name('posts.store');
        Route::get('/create', [PostController::class,'create'])->name('posts.create');
        Route::delete('/{post_id}',[PostController::class, 'destroy'])->name('post.destroy');
        //投稿のコメント作成
        Route::get('/{post_id}/comments', [CommentController::class, 'create'])->name('comments.create');
        Route::post('/{post_id}/comments',[CommentController::class, 'store'])->name('comments.store');
    });
    //プロフィール変更
    Route::prefix('profile')->group(function(){
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    Route::prefix('rooms')->group(function(){
        //メッセージ機能
        Route::get('/',[RoomController::class, 'index'])->name('rooms.index');
        Route::get('/{room_id}',[RoomController::class,'show'])->name('rooms.show');
        //メッセージ保存
        Route::post('/message',[MessageController::class,'store'])->name('messages.store');
    });
});

require __DIR__.'/auth.php';