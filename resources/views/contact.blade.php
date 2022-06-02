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
<h1>This is contact form</h1>
<?php
$myName = "Luan";
$myAge = 30;
?>

{{$myName}}
{{$myAge}}

{{$school}}
{{$address}}

@if($age>=30)
    <p>Bạn đã đủ tuổi lấy vợ</p>
@endif

@if($age<30)
    <p>Lấy vợ sớm làm gì để lời ru thêm buồn</p>
@else
    <p>Lấy vợ đi</p>
@endif

@if($age<10)
    <p>Tuổi ăn tuổi chơi</p>
@elseif($age>10 && $age<20)
    <p>Tuổi học tuổi hành</p>
@elseif($age>20)
    <p>Tuổi làm tuổi lụng</p>
@endif

@switch($age)
    @case(10)
    <p>Tuổi ăn tuổi chơi</p>
    @break
    @case(20)
    <p>Tuổi làm tuổi lung</p>
    @break
    @case(30)
    <p>Tuổi lấy vợ</p>
    @break
@endswitch

@for($i=0;$i<10;$i++)
    <p>
        {{$i}}
    </p>
@endfor

@foreach($provinces as $province)
    {{$province}}
@endforeach

@foreach($languages as $k=>$v)
    <p>
        {{$k}}: {{$v}}
    </p>
@endforeach

@includeIf("sub",['test'=>"hihi"])
</body>
</html>
