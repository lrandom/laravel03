<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function contact()
    {
        echo "This is contact page";
    }

    public function pagination()
    {
        $posts = Post::paginate(5);//mỗi trang có 5 phần tử
        return view('fe.demo_pagination',compact('posts'));
    }


}
