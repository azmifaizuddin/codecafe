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
                ->orWhere('category', 'like', "%{$request->keyword}%");
        })->paginate(10);

        return view('forum.index', compact('questions'));
    }

    public function category()
    {
        $categories = ForumModel::all();
        return view('category.index', compact('categories'));
    }

    public function category_view($category)
    {
        $categories = ForumModel::find_category($category);
        return view('category.show', compact('categories'));
    }
}
