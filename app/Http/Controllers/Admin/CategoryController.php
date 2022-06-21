<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    public function getCategories()
    {
        /* $categories = DB::table('categories')->where('id','>',1)
             ->where('name','Java')
             ->get();*///collection tập hợp các hàng trong bảng categories
        //SELECT * FROM categories WHERE id>1 AND name=Java

        /*$categories = DB::table('categories')->where('id', '1')
            ->orWhere('id', 2)->get();*/
        //SELECT * FROM categories WHERE id=1 OR id=2

        //$categories = DB::table('categories')->where('name', 'LIKE', '%a%')->get();
        //$categories = DB::table('categories')->whereIn('name',['Java'])->get();
        /*$category = DB::select('id,name')->table('categories')->first();
        $count = DB::table('categories')->count('*');//tổng số bản ghi
        $sum = DB::table('categories')->sum('id');//summary của cột id
        $avg = DB::table('categories')->avg('id');//avg của cột id*/

        $data=DB::table('posts')->leftJoin('categories', 'posts.category_id',
            '=', 'categories.id')->select('posts.*',
            'categories.name as categories_name')->get();

        return view('admin.categories.list', compact('data'));
    }


    public function insert()
    {
        DB::table('categories')->insert([
            'name' => 'JS',
            'parent_id' => 1
        ]);
    }
}
