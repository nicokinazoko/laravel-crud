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
            return redirect('/pertanyaan');
        }
    }

    public function detail($id)
    {
        $question               =   questionModel::findbyIdJoin($id);
        return view('items/detailQuestion',compact('question'));
        //dd($question);
    }

    public function edit($id)
    {
        $question               =   questionModel::findbyId($id);
        return view('/items/questionEdit',compact('question'));
        //dd($question);
    }

    public function update($id, Request $request)
    {
        $question               =   questionModel::update($id,$request->all());
        return redirect('/pertanyaan');
    }

    public function delete($id)
    {
        $delete_question        =   questionModel::delete($id);

        return redirect('/pertanyaan');
    }
}
