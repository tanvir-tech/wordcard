<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    function createword(Request $request)
    {

        $word = new Word();
        $word->word = $request->word;
        $word->meaning = $request->meaning;
        $word->pos = $request->pos;
        $word->category_id = $request->category_id;
        $word->synonym = $request->synonym;
        $word->antonym = $request->antonym;
        $word->sentence = $request->sentence;
        

        $word->save();

        return redirect('/admin/newword');
        // return view('admin/wordControl/newword');
    }

    function wordsequence($id,Request $request)
    {
        $words=Word::where('category_id',$id)->paginate(1);;
        // dd($words);

        return response(view('wordCard/wordCard',['words'=>$words,'category_id'=>$id]))->cookie('category_id',$id);

        // return view('wordCard/wordCard',['words'=>$words]);

    }
}
