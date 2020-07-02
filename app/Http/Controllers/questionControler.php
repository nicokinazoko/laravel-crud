<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\questionModel;


class questionControler extends Controller
{
    public function index()
    {
        $question               =   questionModel::getAll();
        //dd($question);

        return view('/items/questionView',compact('question'));
    }

    public function create()
    {
        return view('/items/questionForm');
    }

    public function store(Request $request)
    {
        $data_request           =   $request->all();
        unset($data_request["_token"]);

        $question               =   questionModel::save($data_request);
        //dd($question);

        if($question)
        {
            return view('/items/questionView');
        }
    }
}
