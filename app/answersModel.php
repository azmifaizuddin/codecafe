<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class answersModel extends Model
{
    protected $table = 'answers';
    protected $fillable = ["content", "question_id"];


    public $timestamps = true;

    public static function get_all()
    {
        $answers = DB::table('answers')->get();
        return $answers;
    }

    public static function submit($data)
    {
        // dd($data);
        unset($data["_token"]);
        $new_answer = DB::table('answers')->insert($data);
        return $new_answer;
    }

    public static function showById($pertanyaan_id)
    {
        $answer = DB::table('answers')->where('question_id', $pertanyaan_id)->first();
        return $answer;
    }
}
