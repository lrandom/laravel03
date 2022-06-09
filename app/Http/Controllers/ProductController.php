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

    public function addProduct()
    {
        return view('products.add');
    }

    public function doAddProduct(Request $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $content = $request->input('content');
        $allData = $request->all();
        return view('products.add_result', compact('name', 'price', 'content','allData'));
    }
}
