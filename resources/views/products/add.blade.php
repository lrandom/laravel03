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
{{--@if($errors->any())
    @foreach($errors->all() as $err)
        <p>{{$err}}</p>
    @endforeach
@endif--}}


{{--<form method="post" action="{{route('product.add')}}">
    @csrf
    <div>
        <input type="text" name="name" placeholder="name"/>
        <p style="color:red">{{$errors->first('name')}}</p>
    </div>


    <div>
        <input type="text" name="price" placeholder="price"/>
        <p style="color:red">{{$errors->first('price')}}</p>
    </div>

    <div>
        <textarea placeholder="content" name="content"></textarea>
        <p style="color:red">{{$errors->first('content')}}</p>
    </div>
    <button>Submit</button>
</form>--}}

<form method="post" action="{{route('product.add')}}">
    @csrf
    <div>
        <input type="text" name="name" placeholder="name"/>
        @error('name')
        <p style="color:red;">{{$message}}</p>
        @enderror
    </div>


    <div>
        <input type="text" name="price" placeholder="price"/>
        @error('price')
        <p style="color:red">{{$message}}</p>
        @enderror
    </div>

    <div>
        <textarea placeholder="content" name="content"></textarea>
        @error('content')
        <p style="color:red">{{$message}}</p>
        @enderror
    </div>
    <button>Submit</button>
</form>
</body>
</html>
