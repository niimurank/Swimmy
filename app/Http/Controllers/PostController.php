<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Style;
use App\Models\Distance;
use App\Models\Record;
use App\Models\Like;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware(['auth','verified'])->only(['like','unlike','store']);
    }
    //投稿一覧表示
    public function index(Post $post){
        $posts = $post  ->with(['record.style', 'record.distance','user'])
                        ->orderBy('created_at', 'desc')
                        ->get();
        return view('posts.index', compact('posts'));
    }
    //投稿詳細表示
    public function show($id){
        $post = Post::findOrFail($id);
        return view('posts.show',compact('post'));
    }
    //投稿作成表示
    public function create(Style $style,Distance $distance){
        $styles = $style->get();
        $distances = $distance->get();
        
        return view('posts.create',compact('styles','distances'));
    }
    //投稿登録処理
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
    //投稿いいね処理
    public function like($id){
        Like::create([
            'post_id'=> $id,
            'user_id'=> Auth::id(),
            ]);
            
            session()->flash('success','You Liked the Post.');
            
            return redirect()->back();
    }
    //投稿いいね取り消し処理
    public function unlike($id){
        $like = Like::where('post_id',$id)->where('user_id', Auth::id())->first();
        $like ->delete();
        
        session()->flash('success','You Unliked the Post.');
        
        return redirect()->back();
    }
}
