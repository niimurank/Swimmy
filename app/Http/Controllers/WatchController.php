<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class WatchController extends Controller
{
    public function index(Record $record){
        return view('stopwatch/index');
    }
}
?>