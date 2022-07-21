<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = \App\Models\Product::all();
    return view('fe.cart.home', compact('products'));
})->name('home');

//trang giỏ hàng
Route::get('/cart', function (\Illuminate\Http\Request $request) {
    $cart = $request->session()->get('cart') ?? [];
    return view('fe.cart.cart', compact('cart'));
})->name('cart');

//nơi tiếp nhận và xử lý việc thêm sp vào giỏ hàng
Route::get('/add-to-cart/{id}', function ($id, \Illuminate\Http\Request $request) {
    //return redirect(\route('home'));
    $product = \App\Models\Product::find($id);

    if ($product) {
        //xử lý thêm giỏ hàng ở đây
        if ($request->session()->has('cart')) {
            //dd('test');
            //đã có giỏ hàng
            //lấy về giỏ hàng từ session
            $cart = $request->session()->get('cart');
            //kiểm tra xem sp đã có trong giỏ hay chưa
            $checkExist = false;
            for ($i = 0; $i < count($cart); $i++) {
                if ($cart[$i]['item']->id == $id) {
                    //sp đã có trong giỏ hàng
                    $cart[$i]['item_quantity'] += 1;
                    $checkExist = true;
                    break;
                }
            }
            if (!$checkExist) {
                //sp chưa có trong giỏ hàng
                $cartItem = [
                    'item' => $product,//đặc tả về sản phẩm
                    'item_quantity' => 1//đặc tả về số lượng sp
                ];
                array_push($cart, $cartItem);
            };
            $request->session()->put('cart', $cart);
        } else {
            //chưa có giỏ hàng
            //tạo ra giỏ hàng
            //thêm sp vào giỏ hàng
            //lưu giỏ hàng vào session
            $cart = [
                [
                    'item' => $product,//đặc tả về sản phẩm
                    'item_quantity' => 1//đặc tả về số lượng sp
                ]
            ];
            $request->session()->put('cart', $cart);
        }
    }
    return redirect('/');
})->name('add-to-cart');
Route::get('/delete-cart-item/{id}', function ($id, \Illuminate\Http\Request $request) {
    //xoá sp từ giỏ hàng
    $cart = $request->session()->get('cart');
    //kiểm tra xem sp đã có trong giỏ hay chưa
    for ($i = 0; $i < count($cart); $i++) {
        if ($cart[$i]['item']->id == $id) {
            //sp đã có trong giỏ hàng
            array_splice($cart, $i, 1);
            break;
        }
    }
    $request->session()->put('cart', $cart);
    return redirect(route('cart'));
})->name('delete-cart-item');

Route::get('change-quantity/{id}/{step}', function ($id, $step) {
    $cart = session('cart');
    if ($cart && is_numeric($step)) {
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['item']->id == $id) {
                if (($cart[$i]['item_quantity'] + $step) == 0) {
                    break;
                }
                $cart[$i]['item_quantity'] += $step;
                break;
            }

        }
    }
    session(['cart' => $cart]);
    return redirect(\route('cart'));
})->name('change-quantity');
?>
