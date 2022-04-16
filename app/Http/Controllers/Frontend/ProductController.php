<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Service\Frontend\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(){
        $this->productService = new ProductService();
    }

    public function getListProduct()
    {
        $lstProduct = $this->productService->getListProduct();
        return view('frontend.products.list_product', compact('lstProduct'));
    }

    public function detailProduct($id)
    {
        $product = $this->productService->detailProduct($id);
        $lstProductNotIn = $this->productService->getListProductNotIn($id);
        return view('frontend.products.detail_product', compact('product', 'lstProductNotIn'));
    }
}
