<?php

namespace App\Http\Controllers\Vadim;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function submit(Request $req)
    {
        dd($req->input('message'));
        // $arr=Request::all();
        // echo $arr['name'];
        // print_r($_POST);
        //   return 'ok111111111';
    }
    //
}
