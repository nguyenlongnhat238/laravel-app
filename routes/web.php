<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("products", [ProductController::class,"index"])->name("product.index");
Route::get("products/{productName}", [ProductController::class,"detail"])->name("product.detail");

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// # response another way = redirect to view welcome
// Route::get('/hello1', function () {
//     return redirect('/');
// });

// # response another way = redirect to route hello
// Route::get('/hello2', function () {
//     return redirect('/hello');
// });

// # home page
// Route::get('/home', function () {
//     return view('home');
// });
