<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstcontroller extends Controller
{
    public function index(Request $request){
        $context =  ['date'=>"26th March, 2021, cold morning", 'name'=>"Ochonogor Chibeze", 'dateofbirth'=>"6th June 1993" ];
        dd($request->name);
        return view('whatever', $context);
    }
    public function slash(Request $request){
        return view('welcome');
    }
}
