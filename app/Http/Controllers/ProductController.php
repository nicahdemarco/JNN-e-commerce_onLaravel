<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function index() {
    
        $products = Product::all();
        // dd($products);
        return view('main')->with("products", $products);
    }

    public function productDetail($id)
    {
        $productDetail = Product::find($id);
        // dd($productDetail);

        return view('products.productDetail')->with("product", $productDetail);

    }
    public function search(Request $request) {
    
        $input = $request->input('busqueda');
        $products = Product::where('name','LIKE','%'.$input.'%')->paginate(8);
        return view('products.index')->with("products", $products);
    }
}
