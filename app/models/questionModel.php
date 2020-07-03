<?php

namespace App\models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class questionModel
{
    public static function getAll()
    {
        $question               =   DB::table('question')->get();
        return $question;
    }

    public static function save($data)
    {
        $new_question           =   DB::table('question')->insert($data);

        return $new_question;
    }

    public static function findbyIdJoin($id_cari)
    {
        //$question               =   DB::table('question')->where('id_pertanyaan',$id_cari)->first();
        //$question               =   DB::select('select * from question where id_pertanyaan = ?', [$id_cari]);
        $question               =   DB::table('question')
                                    ->join('answer','question.id_pertanyaan', '=', 'answer.is_selected')
                                    ->where('question.id_pertanyaan', '=', $id_cari)->get();
        return $question;
    }

    public static function findbyId($id_cari)
    {
        $question               =   DB::table('question')->where('id_pertanyaan',$id_cari)->first();
        //$question               =   DB::select('select * from question where id_pertanyaan = ?', [$id_cari]);
        // $question               =   DB::table('question')
        //                             ->join('answer','question.id_pertanyaan', '=', 'answer.id_selected')
        //                             ->where('question.id_pertanyaan', '=', $id_cari);
        return $question;
    }

    public static function update($id_cari,$request)
    {
        $question               =   DB::table('question')->where('id_pertanyaan',$id_cari)->
                                    update
                                    (
                                        [
                                            'judul_pertanyaan'              =>  $request["judul_pertanyaan"],
                                            'isi_pertanyaan'                =>  $request["isi_pertanyaan"],
                                            'tanggal_dibuat_pertanyaan'     =>  $request["tanggal_dibuat_pertanyaan"],
                                            'id_penanya'                    =>  $request["id_penanya"]
                                        ]
                                        );

        return $question;
    }

    public static function delete ($id)
    {
        $delete_question            =   DB::table('question')->where('id_pertanyaan',$id)->delete();

        return $delete_question;
    }
}


?>
