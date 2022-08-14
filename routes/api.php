<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('v1/login', function (Request $request) {
    $attemptData = [
        'email' => $request->input('email'),
        'password' => $request->input('password')
    ];
    if (\Illuminate\Support\Facades\Auth::attempt($attemptData)) {
        $user = User::where('email', $request->input('email'))->first();
        $token = $user->createToken('admin')->accessToken;
        return response()->json(['token' => $token]);
    }
});

Route::prefix('/v1')->middleware('auth:api')->group(function () {
    Route::get('/users', function () {
        $users = \App\Models\User::all();
        return response()->json(['users' => $users]);
    });

    Route::get('/users/{id}', function ($id) {
        $user = \App\Models\User::find($id);
        return response()->json(['user' => $user]);
    });


    Route::delete('/users/{id}', function ($id) {
        \Illuminate\Support\Facades\DB::table('users')->delete([
            'id' => $id
        ]);
        return response()->json(['message' => 'delete success']);
    });
});


