<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormHandler extends Controller
{
    //
    function index(Request $request){
        // return $request->post();
        // return $request->post('fullname);
        // return $request->method();
        // return $request->path();
        return $request->url();
    }
}
