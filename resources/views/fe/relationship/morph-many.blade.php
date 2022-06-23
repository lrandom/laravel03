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
<ul>
    @foreach($products as $product)
        <li>
            @if($product->images)
                @foreach($product->images as $image)
                    <img width="100" src="{{$image->path}}" alt="">
                @endforeach
            @endif
            <h4>{{$product->name}}</h4>
        </li>
    @endforeach
</ul>

<ul>
    @foreach($posts as $post)
        <li>
            @if($post->images)
                @foreach($post->images as $image)
                    <img width="100" src="{{$image->path}}" alt="">
                @endforeach
            @endif
            <h4>{{$post->title}}</h4>
        </li>
    @endforeach
</ul>
</body>
</html>
