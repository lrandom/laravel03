<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto">
    <div class="grid grid-cols-4 gap-4">

    @foreach($products as $product)
        <!--PRODUCT CART-->
            <div class="">
                @if($product->images && count($product->images)>0)
                    <img src="{{$product->images[0]->path}}"
                         class="w-full h-96 object-cover" alt="">
                @else
                    <img src="https://via.placeholder.com/150/FF0000/FFFFFF?Text=Down.com"
                         class="w-full h-96 object-cover" alt="">
                @endif
                <div class="py-2">
                    <p class="text-sm">{{$product->name}}</p>
                    <p class="text-sm">{{$product->price}}</p>
                    <a href="{{route('add-to-cart',['id'=>$product->id])}}" class="p-2 rounded-md border border-gray-400 inline-block">Add To
                        Cart</a>
                </div>
            </div>
        @endforeach


    </div>
</div>
</body>
</html>
