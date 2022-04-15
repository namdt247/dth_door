<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homePage()
    {
        return view('frontend.home');
    }

    public function aboutUs()
    {
        return view('frontend.about_us');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function getListProduct()
    {
        return view('frontend.products.list_product');
    }

    public function detailProduct($id)
    {
        return view('frontend.products.detail_product');
    }
}
