<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container mx-auto">
    <div class="grid grid-cols-3">
        @foreach($photos as $photo)
            <div>
                <img src="{{asset($photo->path)}}"/>
            </div>
        @endforeach
    </div>

    <form action="{{route('upload-img')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="img"/>
        <button>Submit</button>
    </form>
</div>
</body>
</html>
