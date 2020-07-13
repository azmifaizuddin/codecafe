<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ForumModel extends Model
{
    protected $table = "questions";

    protected $fillable = ["title", "content", "category"];

    public static function simpan($request)
    {
        $new_question = new ForumModel;
        $new_question->title = $request->title;
        $new_question->content = $request->content;
        $new_question->category = $request->category;

        $new_question->save();
        return $new_question;
    }

    public static function find_category($category)
    {
        $category = DB::table('questions')->where('category', $category)->first();
        return $category;
    }
}
