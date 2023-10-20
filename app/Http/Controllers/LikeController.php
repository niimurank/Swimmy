<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    //投稿いいね処理
    public function store($post_id){
        Like::create([
            'post_id'=> $post_id,
            'user_id'=> Auth::id(),
            ]);
            
        $likeCount = Like::where('post_id', $post_id)->count();
        return response()->json(['likeCount' => $likeCount]);
    }
    //投稿いいね取り消し処理
    public function destroy($post_id){
        $like = Like::where('post_id',$post_id)->where('user_id', Auth::id())->first();
        $like ->delete();
        
        $likeCount = Like::where('post_id', $post_id)->count();
        return response()->json(['likeCount' => $likeCount]);
    }
}
