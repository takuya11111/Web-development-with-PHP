<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
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
        //$data = DB::table('examples')->get();
        //return $data;

        //examples 1を含むフィールド名を持つすべてのレコードを取得
        //$data = DB::table('examples')
        //->where('name', 'LIKE', '%example 1%')
        //->get();
        //return $data;

        //新しいレコードを挿入(examples 3,example 3 bla bla)し、すべてのレコードを取得
        //DB::table('examples')->insert([
        //    'name' => 'example 3',
        //    'description' => 'example 3 bla bla',
        //]);
        //$data = DB::table('examples')->get();
        //return $data;

        //「name = example 2」の「description」レコードを更新し、すべて取得します
        //DB::table('examples')
            //->where('name', 'example 2')
            //->update([
        //    'description' => "example 2 description",
        //]);
        //$data = DB::table('examples')->get();
        //return $data;

        //「name = example 2」のレコードを削除し、すべてを取得
        DB::table('examples')
            ->where('name', 'example 2')
            ->delete();
        $data = DB::table('examples')->get();
        return $data;

    }
}
