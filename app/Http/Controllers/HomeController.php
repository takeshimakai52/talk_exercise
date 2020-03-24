<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\QuestionTable;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();
        $posts = QuestionTable::latest()
            ->where([
                ['user_id', '=', $id]
            ])
            ->get();
        // return view('home');
        return view('home', ['posts' => $posts]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request) 
     { 
         $question = new QuestionTable(); 
         $user_id=Auth::id();
         if($request->file('image')){
            $path = $request->file('image')->store('public/img');
            $image_path="/storage/img/".basename($path);
         }else{
             $image_path = null;
         }

        //  $image_path="/storage/img/".basename($path);
         $question->user_id = $request->user()->id;
         $question->title = $request->title;
         $question->question = $request->question;
         $question->answer_good = $request->answer_good;
         $question->answer_normal = $request->answer_normal;
         $question->answer_bad = $request->answer_bad;
         $question->re_answer_good = $request->re_answer_good;
         $question->re_answer_normal = $request->re_answer_normal;
         $question->re_answer_bad = $request->re_answer_bad;
         $question->advice_good = $request->advice_good;
         $question->advice_normal = $request->advice_normal;
         $question->advice_bad = $request->advice_bad;
         $question->image_path = $image_path;

        //  $req=[
        //     'image_path'=>$image_path,
        //     'title'=>$request->title,
        //     'question'=>$request->question,
        //     'answer_good'=>$request->answer_good,
        //     'answer_normal'=>$request->answer_normal,
        //     'answer_bad'=>$request->answer_bad,
        //     're_answer_good'=>$request->re_answer_good,
        //     're_answer_normal'=>$request->re_answer_normal,
        //     're_answer_bad'=>$request->re_answer_bad,
        //     'advice_good'=>$request->advice_good,
        //     'advice_normal'=>$request->advice_normal,
        //     'advice_bad'=>$request->advice_bad,
        //     'user_id'=>1,
        //  ];
        //  $question->fill( $req ); 
         $question->save(); 
         return redirect('/home'); 
     } 
}
