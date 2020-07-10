<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ForumModel extends Model
{
    protected $table = "questions";

    protected $fillable = ["title", "content", "tag"];

    public static function simpan($request)
    {
        $new_question = new ForumModel;
        $new_question->title = $request->title;
        $new_question->content = $request->content;
        $new_question->tag = $request->tag;

        $new_question->save();
        return $new_question;
    }

    public static function find_tag($tag)
    {
        $tag = DB::table('questions')->where('tag', $tag)->first();
        return $tag;
    }
}
