<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function main()
    {
        return view('main');
    }
    public function productDetail()
    {
        return view('productDetail.productDetail');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function login()
    {
        return view('auth.login');
    }

    public function faqs()
    {
        return view('faqs.faqs');
    }

    
}
