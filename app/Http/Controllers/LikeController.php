<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    //投稿いいね処理
    public function like($post_id){
        Like::create([
            'post_id'=> $post_id,
            'user_id'=> Auth::id(),
            ]);
            
            return redirect()->back();
    }
    //投稿いいね取り消し処理
    public function unlike($post_id){
        $like = Like::where('post_id',$post_id)->where('user_id', Auth::id())->first();
        $like ->delete();
        
        return redirect()->back();
    }
}
