<?php
namespace App\Http\Controllers\Vadim\Obrab;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Vadim\Myformreq\FormController;
class ObrabController extends Controller
{
    public function submit(FormController $req)
    {
        return 777;
       /* $validation=$req->validate([
            'email' =>'min:5|max:10',
            'fname'=>'required'
        ]);*/
        // dd($req->input('message'));
        // $arr=Request::all();
        // echo $arr['name'];
        // print_r($_POST);
        //   return 'ok111111111';
    }
    //
}
