<?php

namespace App\Http\Controllers;
use App\answersModel;
use Illuminate\Http\Request;

class answersController extends Controller
{
    public function create($id){
        $question = answersModel::find_by_id($id);
        return view('answers.formAnswer', compact('question'));
    }

    public function store(Request $request){
        $new_answer = answersModel::create([
            'content' => $request['content'],
            'question_id' => $request['question_id']
        ]);
        //dd($new_answer);
        return view('answers.indexAnswer', compact('new_answer'));
    }

}
