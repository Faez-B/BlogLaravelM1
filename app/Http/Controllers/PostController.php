<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function test(){
        // $total = 1 +1;
        // dd($total);

        return view('test');
    }
}
