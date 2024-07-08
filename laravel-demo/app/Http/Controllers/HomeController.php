<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
    * Show /index page
    *
    * @param Request $request
    * @return \Illuminate\View\View
    */
    
    public function index(Request $request)
    {
        $input = $request->all();
        return view('index');
    }
    
 
}
