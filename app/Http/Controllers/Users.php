<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class Users extends Controller
{
    function list()
    {
        // return Session::get('logData');
       
       
        $user=User::all();
        return view('userlist',['user'=>$user]);
        
    }

    function create()
    {
        return view('create');
    }

    function loginsubmit(Request $req)
    {
        User::select('username')->where(
             
           [
                ['email','=',$req->email],
           ['password','=',$req->pwd] 
           
           ]
         )->get();
         $req->session()->put('logData',[$req->input()]);
         return redirect('/list');
    }

    public function createsubmit(Request $req)
    {
        // echo $req;
        $user=new User;
        $user->username=$req->username;
        $user->email=$req->email;
        $user->password=$req->pwd;
        $result=$user->save();
        if($result){
            return redirect('/list');
        }
    }
}
