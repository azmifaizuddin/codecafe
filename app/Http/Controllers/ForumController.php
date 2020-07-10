<?php

namespace App\Http\Controllers;

use App\ForumModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function question()
    {
        $questions = ForumModel::paginate(5);
        return view('forum.index', compact('questions'));
    }

    public function cari(\Illuminate\Http\Request $request)
    {
        $questions = ForumModel::when($request->keyword, function ($query) use ($request) {
            $query->where('title', 'like', "%{$request->keyword}%")
                ->orWhere('content', 'like', "%{$request->keyword}%")
                ->orWhere('tag', 'like', "%{$request->keyword}%");
        })->paginate(10);

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
