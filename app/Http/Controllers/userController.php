<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $title = "USER";
        return view('user.index',compact('title'));
    }
}
