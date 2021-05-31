<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Family;

class familycontroller extends Controller
{
    public function index(){
     $members = Family::all() ;
     return $members ;
    }
    public function show($name){
      $person = Family::where('name', $name)->get() ; 
      return $person[0]->created_at;
    }
    public function add_Get(Request $request){
    }
    public function add_Post(Request $request){
      Family::create($request->input());
      return "Success";
    }
}
