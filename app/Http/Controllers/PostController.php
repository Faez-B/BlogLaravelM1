<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = DB::table('posts')->get();
        // dd($posts);
        return view('posts.list', compact('posts'));
    }
}
