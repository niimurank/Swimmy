<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Style;
use App\Models\Distance;

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
}
