<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
       // dd($request->name); 
      // dd($request->date); 
      $fred = "bin laden"; 
        return view('forms');

        


    }


}
