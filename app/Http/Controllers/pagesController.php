<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home()
    {


		 return view('welcome',[
	 	'tasks' => ['go to store','go to market']

	    ,'foo' => 'foo' ]);



    }
    public function about()
    {

      return view('about');


    }
}
