<?php

namespace App\Http\Controllers;
use App\QuestionTable;

use Illuminate\Http\Request;

class TalkController extends Controller
{
    public function show($id){
        // $tests=QuestionTable::find($id);
        // $tests=QuestionTable::inRandomOrder()->take(3)
        // ->get();
        $tests=QuestionTable::all();
        //全部を返してviewで任意のを取り出す
        //$idは現状使ってない
        return $tests;
    }

    public function list(){
        $posts = QuestionTable::latest()->get();
        return view('list', ['posts' => $posts]);
    }


}
