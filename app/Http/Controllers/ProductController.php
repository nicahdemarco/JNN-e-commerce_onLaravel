<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //$products = Product::where('id_producto','=','1')->paginate(8);
        $products = Product::paginate(10);
        return view('main')->with("products", $products);
    }

    // public function indexwomen()
    // {
    //     $products = Product::where('genre_id','=','2')->paginate(8);
    //     return view('products.index')->with("products", $products);
    // }

    // public function indexkids()
    // {
    //     $products = Product::where('genre_id','=','3')->paginate(8);
    //     return view('products.index')->with("products", $products);
    // }

    public function show($id) {
        return view('products.show', ['product' => Product::findOrFail($id)]);
    }
    public function search(Request $request)
    {
        $input = $request->input('busqueda');
        $products = Product::where('name','LIKE','%'.$input.'%')->paginate(8);
        return view('products.index')->with("products", $products);
    }
}
