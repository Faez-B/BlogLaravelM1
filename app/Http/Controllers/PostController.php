<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy("created_at", "DESC")->get();
        return view('posts.list', compact('posts'));
    }

    public function details($id = null){
        $post = Post::find($id);
        return view("posts.details", compact(['id', 'post']));
    }

    public function ajouter(Request $request){
        if ($request) {
            // dd($request);
            $post = new Post;
            // dd($request->request->get("titre"));
            $post->title = $request->request->get("titre");
            $post->extrait = $request->request->get("extrait");
            $post->description = $request->request->get("desc");
            $post->save();

            $this->details($post->id);

        }
        else {
            return view("posts.ajout");
        }
    }
}
