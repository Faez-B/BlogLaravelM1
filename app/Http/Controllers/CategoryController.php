<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.list')->with('categories', $categories);
    }

    public function add()
    {
        return view('categories.add');
    }

    public function store(CategoryStoreRequest $request)
    {
        $params = $request->validated();
        Category::create($params);
        // return back();
        return redirect()->route('categoryList');

    }
}
