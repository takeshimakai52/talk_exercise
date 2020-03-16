<?php

namespace App\Http\Controllers;
use App\QuestionTable;

use Illuminate\Http\Request;

class TalkController extends Controller
{
    public function show(){
        $test="test";
        $tests=QuestionTable::all();
        return $tests;
    }
}
