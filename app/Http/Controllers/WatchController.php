<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Models\Post;

class WatchController extends Controller
{
    public function index(Record $record){
        return view('posts.index');
    }
}
?>