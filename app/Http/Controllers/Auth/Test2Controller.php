<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
class Test2Controller extends Controller
{
    public function submit(ContactRequest $req)
    {
        return 999;
       /*$this->validate($req,[
           'email' =>'email',
           'fname'=>'min:5|max:10'
        ]);
       return $req->input('email');*/

    }

}
