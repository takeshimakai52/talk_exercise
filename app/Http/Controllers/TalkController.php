<?php

namespace App\Http\Controllers;
use App\QuestionTable;

use Illuminate\Http\Request;

class TalkController extends Controller
{
    public function show($id){
        $test=QuestionTable::find($id);;
        $tests=QuestionTable::all();

        return $test;
    }
}
