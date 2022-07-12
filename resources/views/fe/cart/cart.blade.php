<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{asset('public/css/style.css')}}">
</head>
<body>
<div class="container mx-auto">
    <table class="table-auto" style="width:100%">
        <thead>
        <tr>
            <th>Sản phẩm</th>
            <th>Giá/Sp</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cart as $cartItem)
            <tr>
                <td class="text-center">
                    <div>{{$cartItem['item']->name}}</div>
                </td>

                <td class="text-center">
                    {{$cartItem['item']->price}}
                </td>

                <td class="text-center">
                    <a href="{{route('change-quantity',['id'=>$cartItem['item']->id,'step'=>-1])}}">-</a>
                    <input class="border text-center" value="{{$cartItem['item_quantity']}}">
                    <a href="{{route('change-quantity',['id'=>$cartItem['item']->id,'step'=>1])}}">+</a>
                </td>

                <td class="text-center">

                    {{$cartItem['item']->price*$cartItem['item_quantity']}}

                </td>

                <td>
                    <a onclick="return('Are you sure you want to delete')"
                       href="{{route('delete-cart-item',['id'=>$cartItem['item']->id])}}"
                    >Xoá</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
