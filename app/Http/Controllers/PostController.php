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
}
