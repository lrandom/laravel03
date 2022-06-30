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
<img src="{{asset('storage/avatar/RzuvwkjOMkkJP8mpNNU4z9jliKATroq7Ppz5hYSA.jpg')}}"/>
<form method="post" action="{{route('demo-upload')}}" enctype="multipart/form-data">
    @csrf
    <input type="file" name="img"/>
    <button>Submit</button>
</form>
</body>
</html>
