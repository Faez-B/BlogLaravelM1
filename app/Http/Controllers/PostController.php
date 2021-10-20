<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostStoreRequest;

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

    public function ajouter()
    {
        return view('posts.ajout');
    }

    public function store(PostStoreRequest $request)
    {
        $params = $request->all();
        Post::create([
            'title' => $params['titre'],
            'description' => $params['desc'],
            'extrait' => $params['extrait'],
        ]);

        return redirect()->route('postsList');
    }

    // public function ajouter(Request $request){
    //     if ($request) {
    //         // dd($request);
    //         $post = new Post;
    //         // dd($request->request->get("titre"));
    //         $post->title = $request->request->get("titre");
    //         $post->extrait = $request->request->get("extrait");
    //         $post->description = $request->request->get("desc");
    //         $post->save();

    //         // $this->details($post->id);
    //         // $this->index();

    //     }
    //     else {
    //         return view("posts.ajout",);
    //     }
    // }

    

    public function update($id, PostStoreRequest $request)
    {
        // if ($post) {
        //     $id = $post->id;
        //     return view('posts.edit', compact(['post','id']));
        // }

        // else {
        //     // return view('posts.list');

        //     $posts = Post::orderBy("created_at", "DESC")->get();
        //     return view('posts.list', compact('posts'));
        // }

        $post = Post::find($id);
        $params = $request->all();

        $post = $post->update([
            "title" => $params['titre'],
            "extrait" => $params['extrait'],
            "description" => $params['desc'],

        ]);
        return view('posts.edit')
                ->with('post', $post);
    }
}
