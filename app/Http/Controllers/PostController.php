<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        //$posts = Post::all();
        /*     $posts = Post::where('title', 'like', '%hello%')->get();
             $post = Post::find(2);
             echo ($post->title);
             echo ($post->id);

             $post = Post::where('title', 'like', '%hello%')->first();
             echo $post->title;
             dd($posts);*/
//        $post = new Post();
//        $post->title = "Xin chao";
//        $post->content = "Xin chao";
//        $post->views = 1;
//        $post->category_id = 1;
//        $post->save();
        /*        Post::create([
                    'title'=>'Xin chao',
                    'content'=>'Xin chao',
                    'views'=>1,
                    'category_id'=>1
                ]);*/
        /*  $post = Post::find(14);
          $post->title = "Xin chao Viet Nam";
          $post->save();*/
        /*
                Post::where('id', 14)->update([
                    'title' => 'Hello VietNam'
                ]);*/

        //Post::where('id', 12)->delete();
        Post::where('id', 12)->restore();
    }
}
