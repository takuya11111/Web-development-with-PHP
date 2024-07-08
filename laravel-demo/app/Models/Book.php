<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'author',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    //使用するテーブル
    protected $table = 'book';


}
