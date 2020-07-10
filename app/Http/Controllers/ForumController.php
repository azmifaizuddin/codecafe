<?php

namespace App\Http\Controllers;

use App\ForumModel;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function question()
    {
        $questions = ForumModel::all();
        return view('forum.index', compact('questions'));
    }

    public function tag()
    {
        $tags = ForumModel::all();
        return view('tag.index', compact('tags'));
    }

    public function tag_view($tag)
    {
        $tags = ForumModel::find_tag($tag);
        return view('tag.show', compact('tags'));
    }
}
