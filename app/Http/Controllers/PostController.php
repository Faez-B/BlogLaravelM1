<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdatePictureRequest;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy("created_at", "DESC")->get();
        return view('posts.list', compact('posts'));
    }

    public function details($id){
        $post = Post::find($id);
        return view("posts.details", compact(['id', 'post']));
    }

    public function ajouter()
    {
        return view('posts.ajout');
    }

    public function store(PostStoreRequest $request)
    {
        // $params = $request->all();
        $params = $request->validated();
        $file = Storage::put('public', $params['picture']);

        $params['picture'] = substr($file, 7);
        // dd($file);
        // dd($params);
        Post::create([
            'title' => $params['titre'],
            'description' => $params['desc'],
            'extrait' => $params['extrait'],
            'picture' => $params['picture'],
        ]);

        return redirect()->route('postsList');
    }

    public function delete($id)
    {
        $post = Post::find($id);

        // Si tu trouves l'image tu la supprime
        if (Storage::exists("public/$post->picture")) {
            Storage::delete("public/$post->picture");
        }

        $post->delete();

        return back();
    }    

    public function update($id, PostUpdateRequest $request)
    {
        $post = Post::find($id);
        $params = $request->validated();

        $post = $post->update([
            "title" => $params['titre'],
            "extrait" => $params['extrait'],
            "description" => $params['desc'],

        ]);

        return redirect()->route('postsList');
    }

    public function updatePicture($id, PostUpdatePictureRequest $request)
    {
        $post = Post::find($id);
        $params = $request->validated();

        if (Storage::exists("public/$post->picture")) {
            Storage::delete("public/$post->picture");
        }

        $file = Storage::put('public', $params['picture']);

        $params['picture'] = substr($file, 7);
        $post->picture = $params['picture'];
        $post->save();

        // $post->update([
        //     'picture' => $params['picture'],
        // ]);
        return back();
    }
}
