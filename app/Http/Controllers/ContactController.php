<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $req)
    {
        $validation=$req->validate([
            'email' =>'min:5|max:10',
            'fname'=>'required'
        ]);
       // dd($req->input('message'));
       // $arr=Request::all();
       // echo $arr['name'];
       // print_r($_POST);
     //   return 'ok111111111';
    }
    //
}
