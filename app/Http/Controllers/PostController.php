<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Style;
use App\Models\Distance;
use App\Models\Record;

class PostController extends Controller
{
    public function index(Post $post){
        $posts = $post  ->with(['record.style', 'record.distance','user'])
                        ->orderBy('created_at', 'desc')
                        ->get();
        return view('posts.index', compact('posts'));
    }
    
    public function show($id){
        $post = Post::findOrFail($id);
        return view('posts.show',compact('post'));
    }

    public function create(Style $style,Distance $distance){
        $styles = $style->get();
        $distances = $distance->get();
        
        return view('posts.create',compact('styles','distances'));
    }
    
    public function store(Request $request, Post $post, Record $record){
        //recordsテーブルへの処理
        $input_record = $request['record'];
        $record->fill($input_record);
        $record->user_id = Auth::id();
        $record->save();
        //postsテーブルへの処理
        $input_post = $request['post'];
        $post->fill($input_post);
        $post->user_id = Auth::id();
        $post->record_id = $record->id;
        $post->save();
        
        
        return redirect('/posts');
    }
}
