<?php

namespace App\models;
use Illuminate\Support\Facades\DB;


class answerModel
{
    public static function getAll()
    {
        $answer                 =   DB::table('answer')->get();
        return $answer;
    }

    public static function save($data)
    {
        $new_answer             =   DB::table('answer')->insert($data);
        return $new_answer;
    }

    public static function find($jawaban)
    {
        $answer                 =   DB::select('select * from answer where is_selected = ?', [$jawaban]);
        return $answer;

    }
}

?>
