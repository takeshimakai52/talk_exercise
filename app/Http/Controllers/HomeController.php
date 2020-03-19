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
}
