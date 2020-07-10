<?php

namespace App\Http\Controllers;

use App\questionsModel;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $questions = questionsModel::all();
        // dd($questions);
        return view('forum.index', compact('questions'));
    }
}
