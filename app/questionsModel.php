<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questionsModel extends Model
{
    protected $table = "questions";

    protected $fillable = ["title", "content", "tag"];

    public static function simpan($request){
        $new_question = new questionsModel;
        $new_question->title = $request->title;
        $new_question->content = $request->content;
        $new_question->tag = $request->tag;

        $new_question->save();
        return $new_question;
    }
}
