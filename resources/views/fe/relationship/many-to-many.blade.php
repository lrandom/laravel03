<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach($types as $type)
    <ul>
        <li>
            <ul>
                <span>{{$type->name}}</span>
                @foreach($type->products as $product)
                    <li>
                        <span>
                         {{$product->name}} - {{$product->content}} - {{$product->price}}
                        </span>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
@endforeach

@foreach($products as $product)
    <ul>
        <li>
            <ul>
                <span>{{$product->name}}</span>
                @foreach($product->types as $type)
                    <li>
                        <span>
                        {{$type->name}}
                        </span>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
@endforeach
</body>
</html>
