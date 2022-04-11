<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index($id=''){
        return view('userPage',array('userid'=>$id));
    }
}
