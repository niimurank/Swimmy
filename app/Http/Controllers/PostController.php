<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post){
        $posts = $post  ->with(['record.style', 'record.distance','user'])
                        ->orderBy('created_at', 'desc')
                        ->get();
        return view('posts.index', ['posts' => $posts]);
    }
    
    public function show(Post $post){
        return view('posts.show')->with(['post' => $post]);
    }
    
    public function create(Post $post){
        return view('posts.create');
    }
    
    public function store(Request $request,Post $post){
        $input = $request['post'];
        $post -> create($input);
        return redirect('posts.index' . $post->id);
    }
}
