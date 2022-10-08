<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   
    function createcategory(Request $request)
    {
        $word = new Category();
        $word->name = $request->name;
        $word->description = $request->description;
        $word->level = $request->level;
        $word->save();

        return view('admin/wordControl/newword');
    }


    
    function catlist()
    {
        $categories=Category::all();
        return view('wordCard/catList',['categories'=>$categories]);

    }
}
