<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//HomeController.php
use App\Http\Controllers\HomeController;

//2024-07-04 start
use App\Http\Controllers\ExampleController;
use App\Models\Example;
use App\Http\Controllers\BookController;
use App\Models\Book;

//2024-07-04 end

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/index', [HomeController::class, 'index']);
Route::get('/index/{page?}', function ($page = 'view=other') {
    if ($page == 'view=welcome') {
        return view('welcome');
    } else {
        return view('index');
    }
});



Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello-world', function () {
    return 'Hello World';
    
});



/*http://example.com/user
Route::get('/user', [UserController::class, 'index']);
*/


/*
Route::match(['get', 'post'], '/', function () {
    //
});


Route::any('/', function () {
    //
});
*/

//2024-07-04 start

Route::get('/examples', [ExampleController::class, 'index']);

Route::get('/examplesmodel', [Example::class, 'index']);

Route::get('/books', [BookController::class, 'index']);

Route::get('/booksmodel', [Book::class, 'index']);

//2024-07-04 end

//CURD----------------------------------------------------------
Route::resource('users', UserController::class);

Route::resource('books', BookController::class);
