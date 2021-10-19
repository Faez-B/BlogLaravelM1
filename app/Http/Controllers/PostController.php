<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        // $posts = DB::table('posts')->get();
        // $posts = Post::all();
        $posts = Post::orderBy("created_at", "DESC")->get();
        // dd($posts);
        return view('posts.list', compact('posts'));
    }

    public function details($id = null){
        $post = Post::find($id);

        return view("posts.details", compact(['id', 'post']));
    }

    public function ajouter(){
        return view("posts.ajout");
    }
}
