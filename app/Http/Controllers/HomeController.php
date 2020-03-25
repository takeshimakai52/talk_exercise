<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\QuestionTable;
use App\Http\Requests\CreateQuestionRequest;

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
        $request->validate([
            'title' => 'required|max:50',
            'question' => 'required',
            'answer_good'=>'required',
            'answer_normal'=>'required',
            'answer_bad'=>'required',
            're_answer_good'=>'required',
            're_answer_normal'=>'required',
            're_answer_bad'=>'required',
            'advice_good'=>'required',
            'advice_normal'=>'required',
            'advice_bad'=>'required',
            ],
            [
            'title.required' => '会話の相手は入力必須です',
            'question.required' => '一言目は入力必須です',
            'answer_good.required'=>'あなたのグッドなお返事は入力必須です',
            'answer_normal.required'=>'あなたのノーマルなお返事は入力必須です',
            'answer_bad.required'=>'あなたのバッドなお返事は入力必須です',
            're_answer_good.required'=>'相手ののグッドなお返事は入力必須です',
            're_answer_normal.required'=>'相手のノーマルなお返事は入力必須です',
            're_answer_bad.required'=>'相手のバッドなお返事は入力必須です',
            'advice_good.required'=>'グッドなアドバイスは入力必須です',
            'advice_normal.required'=>'ノーマルなアドバイスは入力必須です',
            'advice_bad.required'=>'バッドなアドバイスは入力必須です',
            ]
        );
     
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

     public function edit($id)
    {
        $posts = QuestionTable::findOrFail($id);

        // return view('home');
        return view('edit', ['posts' => $posts]);
    }

    public function update(Request $request, $id) 
     { 
        $request->validate([
            'title' => 'required|max:50',
            'question' => 'required',
            'answer_good'=>'required',
            'answer_normal'=>'required',
            'answer_bad'=>'required',
            're_answer_good'=>'required',
            're_answer_normal'=>'required',
            're_answer_bad'=>'required',
            'advice_good'=>'required',
            'advice_normal'=>'required',
            'advice_bad'=>'required',
            ],
            [
            'title.required' => '会話の相手は入力必須です',
            'question.required' => '一言目は入力必須です',
            'answer_good.required'=>'あなたのグッドなお返事は入力必須です',
            'answer_normal.required'=>'あなたのノーマルなお返事は入力必須です',
            'answer_bad.required'=>'あなたのバッドなお返事は入力必須です',
            're_answer_good.required'=>'相手ののグッドなお返事は入力必須です',
            're_answer_normal.required'=>'相手のノーマルなお返事は入力必須です',
            're_answer_bad.required'=>'相手のバッドなお返事は入力必須です',
            'advice_good.required'=>'グッドなアドバイスは入力必須です',
            'advice_normal.required'=>'ノーマルなアドバイスは入力必須です',
            'advice_bad.required'=>'バッドなアドバイスは入力必須です',
            ]
        );
     
         $question = QuestionTable::findOrFail($id); 
        //  $user_id=Auth::id();
         if($request->file('image')){
            $path = $request->file('image')->store('public/img');
            $image_path="/storage/img/".basename($path);
         }else{
             $image_path = $request->image_path;
         }
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
         $question->save(); 

         return redirect('/home'); 
     } 

     public function delete($id)
     {
         $post = QuestionTable::findOrFail($id);
         $post->delete();
         return redirect('/home'); 
     }
}
