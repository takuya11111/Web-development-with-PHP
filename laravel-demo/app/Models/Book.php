<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Book extends Model
{
    use HasFactory;

    public function index(Request $request)
    {
    
    $book = new Book();                                         
    $book->name = 'Database, data management system';
    $book->description = '';
    $book->timestamps = false;    // 追記
    $book->save();

    return Book::all();

    }
}

