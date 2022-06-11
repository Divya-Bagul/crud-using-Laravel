<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class users extends Controller
{
    //

    function login(Request $req){
        $user = User::where([['email','=',$req->email],['password','=',$req->password]])->get();
        $username = User::where([['email','=',$req->email],['password','=',$req->password]])->get(['name']);
        if($user->isEmpty()){
            return redirect('/'); 
        }
        else{

            $req->session()->put('name',$username);
            return redirect('product_page');
        }
    }

    function logout(Request $req){
        $req->session()->flash('name', 'logout');
        return redirect('/');
    }
}
