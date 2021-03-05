<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request){

       // dd($request);
        $rules = [];


        $rules += ['name' => 'required'];
        $rules += ['email' => 'required'];
        $rules += ['supject' => 'required'];
        $rules += ['message' => 'required'];
       

        $request->validate($rules);

        $request_data = $request->all();

       
        // dd($request_data);
        Message::create($request_data);
        session()->flash('success','send successfully');
        return redirect()->back();
    }
}
