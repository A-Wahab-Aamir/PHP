<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function view(){
        return view('registration');
    }

    public function insert(request $request){
        $name=$request->input('name');

    }



}
