<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function () {
    echo "This is about page";
});

Route::get("/contact", function (\Illuminate\Http\Request $request) {
    echo $request->query('id');
    echo $request->query("name");
});

//segment
Route::get("/demo/{id}", function ($id) {
    echo $id;
});

Route::post("/do-login", function () {
    echo "This is do login handler";
});
