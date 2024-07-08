<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
    * show example data
    *
    * @param Request $request
    * @return \Illuminate\View\View
    */
    public function index(Request $request)
    {
        //[]を出力
        //$data = [];
        //TODO: run query builder here
        //return $data;
        
        //すべてのレコードを取得
        $data = DB::table('books')->get();
        return $data;
    }
}

