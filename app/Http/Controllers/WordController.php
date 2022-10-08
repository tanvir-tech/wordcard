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
        $word->pos = $request->pos;
        $word->category_id = $request->category_id;
        $word->synonym = $request->synonym;
        $word->antonym = $request->antonym;
        $word->sentence = $request->sentence;
        

        $word->save();

        return view('admin/wordControl/newword');
    }
}
