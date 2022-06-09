<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function list()
    {
        return view('products.list');
    }

    public function detail(Request $request)
    {
        //$id = $request->id;
        //$id = $request->query('id');
        $id = $request->input('id');
        $allData = $request->all();
        return view('products.detail', compact('id', 'allData'));
    }

    public function addProduct(Request $request)
    {
        if ($request->isMethod('POST')) {
            //validate
            $request->validate([
                'name' => 'required', //phải điền
                'price' => 'required|numeric', //phải điền và phải là số
                'content' => 'required' //phải điền
            ],[],[
                'name'=>'Tên',
                'price'=>'Giá',
                'content'=>'Nội dung'
            ]);
            //chạy tiếp đến phần này
            dd($request->all());
        }
        return view('products.add');
    }

    /*    public function doAddProduct(Request $request)
        {
            //if ($request->has('name')) {
            $name = $request->input('name') ?? null;
            //}

            $price = $request->input('price');
            $content = $request->input('content');
            $allData = $request->all();
            return view('products.add_result', compact('name', 'price', 'content', 'allData'));
        }*/
}
