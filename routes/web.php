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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    return view('fe.my-profile');
})->middleware(['auth'])->name('profile');

Route::get('my-login', function () {
    return view('fe.login');
})->name('my-login');

Route::get('do-logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('my-login');
})->name('do-logout');

Route::post('/do-login', function (\Illuminate\Http\Request $request) {
    $attemptData = [
        'email' => $request->input('email'),
        'password' => $request->input('password')
    ];
    if (\Illuminate\Support\Facades\Auth::attempt($attemptData)) {
        //thông tin đăng nhập chính xác
        $request->session()->regenerate();
        return redirect()->route('profile');
    } else {
        return redirect(\route('my-login'));
    }
})->name('do-login');

Route::get('/admin-area', function () {
    echo 'admin area';
})->name('admin-area')->middleware(\App\Http\Middleware\CheckAdminLevel::class);

Route::get('/staff-area', function () {
    echo 'staff area';
})->name('staff-area')->middleware(\App\Http\Middleware\CheckStaffLevel::class);

Route::get('/user-area', function () {
    echo 'user area';
})->name('user-area')->middleware('auth');

Route::get('/restrict-notice', function () {
    echo 'You are not allowed to access this page';
})->name('restrict-notice');

Route::get('/set-session', function (\Illuminate\Http\Request $request) {
    $request->session()->put('school_name',['name'=>'Luan']);
    session(['class_name' => 'laravel 03']);
});

Route::get('/get-session', function (\Illuminate\Http\Request $request) {
    echo $request->session()->get('school_name');
    echo session('class_name');
});

Route::get('/all-session', function (\Illuminate\Http\Request $request) {
    dd($request->session()->all());
});

Route::get('/remove-session', function (\Illuminate\Http\Request $request) {
    $request->session()->forget('school_name');
    //$request->session()->flush();
});

Route::get('/remove-once-session', function (\Illuminate\Http\Request $request) {
    echo $request->session()->pull('class_name');
});

Route::get('/list-product', function () {
    return view('fe.list-product');
})->name('list-product');

Route::get('/add-product', function () {
    //add database xong rồi
    return redirect(\route('list-product'))->with('success', 'Add product success');
});


require __DIR__ . '/cart.php';
require __DIR__ . '/auth.php';
