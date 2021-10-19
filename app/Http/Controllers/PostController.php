<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function test(){
        // $total = 1 +1;
        // dd($total);

        $loading = false;
        $users = ["User 1","User 2","User 3"];
        $posts = ["Post 1","Post 2","Post 3"];
        return view('test', compact(
                                    [
                                        'loading', 
                                        'users', 
                                        'posts',
                                    ]));

        // compact et with sont équivalents (peu importe ce qu'on utilise pour le projet) 

        // return view('test')
        //     ->with('loading', $loading)
        //     ->with('users', $users)
        //     ->with('posts', $posts);
    }
}
