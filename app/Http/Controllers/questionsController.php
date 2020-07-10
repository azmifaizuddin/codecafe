<?php

namespace App\Http\Controllers;

use App\questionsModel;
use Illuminate\Http\Request;
use Auth;

class questionsController extends Controller
{
    public function index(){
        $questions = questionsModel::all();
       // dd($questions);
        return view('questions.index', compact('questions'));
    }

    public function create(){
        return view('question.form');
    }

    public function store(Request $request){
        $new_question = questionsModel::create([
            "title" => $request["title"],
            "content" => $request["content"],
            "tag" => $request["tag"]
        ]);
        return redirect('/questions');
    }
}
