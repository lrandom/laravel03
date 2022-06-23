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
<table>
    <tr>
        <th>Category Name</th>
        <th>Posts</th>
    </tr>


    @foreach($categories as $category)
        <tr>
            <td>
                {{$category->name}}
            </td>
            <td>
                @foreach($category->posts as $post)
                    <div style="border:1px solid black;padding:2rem;">
                        <div>Post Title: {{$post->title}}</div>
                        <div>Post Content: {{$post->content}}</div>
                        <div>Post Views: {{$post->views}}</div>
                    </div>
                @endforeach
            </td>
        </tr>
    @endforeach

</table>

<style>
    table tr,table td{
        border:1px solid #cdcdcd;
    }
</style>
</body>
</html>
