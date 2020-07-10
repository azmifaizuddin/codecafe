<?php

namespace App\Http\Controllers;

use App\questionsModel;
use Illuminate\Http\Request;

class ForumController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $questions = questionsModel::all();
        return view('forum.index', compact('questions'));
    }
}
