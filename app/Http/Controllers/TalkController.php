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
        //全部を返して向こうで任意のを取り出すようにしてる
        //$idは使ってない
        return $tests;
    }

    // public function allget(){
    //     $allquestions=QuestionTable::all();

    //     return $allquestions;df
    // }
}
