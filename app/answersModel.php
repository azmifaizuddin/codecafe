<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class answersModel extends Model
{
    protected $table = 'answers';
    protected $fillable = ["content", "question_id"];


    public static function find_by_id($id){
        $question = DB::table('questions')->where('id', $id)->first();
        return $question;
    }

    public static function simpan($request){
        $new_answer = new answersModel;
        $new_answer->content = $request->content;
        $new_answer->question_id = $request->question_id;

        $new_answer->save();
        return $new_answer;
    }

    public function question(){
        return $this->belongsTo('App\questionsModel');
    }
}
