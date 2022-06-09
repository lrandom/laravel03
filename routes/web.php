<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController as ProductController;

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

Route::get("/contact", function (Request $request) {
    //load view vào
    //return view("contact");

    //truyền dữ liệu vào view cách 1
    /* return view("contact",
         [
             "school" => "NIIT",
             "address" => "Ha Noi"
         ]);*/

    //truyền dữ liệu vào view cách 3
    $school = "NIIT";
    $address = "Ha Noi";
    $age = 30;
    $provinces = ["Hà Nội", "Hải Phòng", "Quảng Ninh"];
    $languages = [
        "be1" => "PHP",
        "be2" => "Java",
        "fe" => "JS"
    ];
    return view("contact", compact("school", "address", "age", "provinces", "languages"));
});

//segment
Route::get("/demo/{id}", function ($id) {
    echo $id;
});

Route::post("/do-login", function () {
    echo "This is do login handler";
});


//Routing group
Route::prefix('user')->group(function () {
    Route::get('/profile', function () {
        echo "this is profile page";
    })->name("user.profile");
    Route::get('/change-profile', function () {
        echo "this is change profile page";
    })->name("user.change-profile");
});

Route::get("/demo-get-name", function () {
    echo \route("user.profile");
    echo \route("user.change-profile");
});


//user/profile
//user/change-profile

//7 trở về trước
/*Route::get("/product/list", 'App\Http\Controllers\ProductController@list');
Route::get("/product/detail", 'App\Http\Controllers\ProductController@detail');*/

//8 về sau
Route::get("/product/list", [ProductController::class, 'list']);
Route::get("/product/detail", [ProductController::class, 'detail']);
Route::get('/product/add', [ProductController::class, 'addProduct']);
Route::post('/product/do-add', [ProductController::class, 'doAddProduct'])->name('product.do-add');
