<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(Request $request){
        $categories = Category::paginate();
        // dd($categories);    
        return view('references.categories.index',compact('categories'));
    }

    public function store(Request $request){
        // dd($request->all());
        $user = auth()->user();
        // dd($user);

        $category = Category::where('name',$request->name)->first();
        if(!$category){
            $category = new Category;
            $category->parent_id = 0;
            $category->name = $request->name;
            $category->description= $request->description;
            $category->status = 1;
            $category->save();
        }

        return back();
    }
}
