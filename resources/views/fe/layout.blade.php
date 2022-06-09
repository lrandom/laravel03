<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Trang chủ')</title>
</head>
<body>
<div class="container">
    <nav>
        <div><a href="">Home</a></div>
        <div><a href="">Blog</a></div>
        <div><a href="">About</a></div>
    </nav>
    <div class="main-content">
        @section('main-content')
            Home Page Content
        @show
    </div>
    <footer>
        This is my blog sites for IT
    </footer>
</div>

<style>
    .container {
        width: 1024px;
        margin: 0px auto
    }

    .container nav {
        display: flex;
        justify-content: center;
        gap: 10px;
        align-items: center;
    }

    .container .main-content {
        height: 500px;
        background: #cdcdcd;
    }

    .container footer {
        text-align: center;
    }
</style>
</body>
</html>
