<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Ramsey\Collection\Collection;

class HomeController extends Controller
{
    public function contact()
    {
        echo "This is contact page";
    }

    public function pagination()
    {
        $posts = Post::paginate(5);//mỗi trang có 5 phần tử
        return view('fe.demo_pagination', compact('posts'));
    }


    public function demoCollection()
    {
        /*$myCollect = collect([1, 2, 3, 2, 3]);*/
        /* $myCollect->each(function ($item, $index) {
             echo $item . $index;
         });*/

        /*   $newCollect=$myCollect->map(function ($item) {
               return $item * 2;
           });
           $newCollect->each(function ($item, $index) {
               echo $item;
           });*/

        /*        $myCollect = collect([
                    [
                        'name' => 'Luan',
                        'age' => '20'
                    ],
                    [
                        'name' => 'Nam',
                        'age' => 30,
                    ]
                ]);

                $newCollect = $myCollect->pluck('age');
                $newCollect->each(function ($item) {
                    echo $item;
                });*/

        /*        $myCollect = collect([
                    [
                        'name' => 'Luan',
                        'age' => 20
                    ],
                    [
                        'name' => 'Nam',
                        'age' => 30,
                    ]
                ]);*/

        /*   $myCollect = collect([20,30,40,50]);
           $newCollect = $myCollect->filter(function ($item) {
               return $item > 30;
           });*/
        /*$newCollect = $myCollect->filter(function ($item) {
            return $item['age'] > 20;
        });
        dd($newCollect);*/
        //dd($newCollect);

        /*$myCollect = collect([3, 4, 5, 6, 2, 1]);
        $total = $myCollect->reduce(function ($carry = 1, $item) {
            $carry += $item;
            return $carry;
        });
        echo $total;*/


        /*       $myCollect = collect([
                   'name' => 'Luan',
                   'languages' => [
                       'tiếng Việt',
                       'English'
                   ]
               ]);

               $newCollect = $myCollect->flatten();
               dd($newCollect->toArray());
               */


        $myCollect = collect([2, 3, 4, 5]);
        $newCollect = $myCollect->convert();
        dd($newCollect);
    }

    function each($mang, $func)
    {
        for ($i = 0; $i < count($mang); $i++) {
            $func($mang[$i], $i);
        }

        foreach ($mang as $item) {

        }
    }


    function uploadForm()
    {
        return view('fe.upload-form');
    }

    function demoUpload(Request $request)
    {
        if ($request->file('img')) {
            $file = $request->file('img');
            //$file->store('/avatar/', 'public');
            $file->storeAs('/avatar', time() . 'my-avatar'.$file->getClientOriginalName(), 'public');
        }
    }

}
