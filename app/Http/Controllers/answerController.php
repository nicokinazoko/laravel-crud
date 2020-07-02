<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\answerModel;

class answerController extends Controller
{
    public function index($answer)
    {
        //$answer                 =   answerModel::getAll();
        $jawaban                =   answerModel::find($answer);
        //return view('/items/answerView',['answer' => $jawaban]);
        //return view('/items/answerView',compact('answer'));
        return view('/items/answerView',compact('jawaban'));
        //dd($jawaban);
        //return view('/items/answerView',compact('answer'));
    }

    public function store(Request $request)
    {
        $data_request           =   $request->all();
        unset($data_request["_token"]);

        $answer                 =   answerModel::save($data_request);
        //dd($question);

        if($answer)
        {
            return view('/items/answerView');
        }
    }


}
