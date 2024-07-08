<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Example extends Model
{

    use HasFactory;


    public function index(Request $request)
{
    
    //$data = Example::all();                                          //すべてのレコードをexamplesテーブルに取得
    //$data = Example::where('name', 'LIKE', '%example 1%')->get();    //「example 1」を含むフィールド名を持つすべてのレコードを取得
    //return $data;

    /*//新しいレコードを挿入(examples 4,example 4 bla bla)し、すべてのレコードを取得
    $example = new Example();                                         
    $example->name = 'example 4';
    $example->description = 'example 4 bla bla';
    $example->save();
    */

    /*//「name = example 1」の「description」レコードを更新し、すべて取得します
    Example::where('name', 'example 1')
    ->update([
        'description' => "example 1 description",
    ]);
    */

    //「id = 1」のレコードを削除し、すべてを取得
    Example::find(1)->delete();

    return Example::all();

}

}
