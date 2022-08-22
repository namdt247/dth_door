<?php

namespace App\Http\Controllers\Frontend;

use App\Helper\Config;
use App\Helper\Message;
use App\Http\Controllers\Controller;
use App\Http\Service\Frontend\CategoryService;
use App\Http\Service\Frontend\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    protected $cateService;

    public function __construct(){
        $this->productService = new ProductService();
        $this->cateService = new CategoryService();
    }

    public function getListProduct(Request $request)
    {
        $cateId = $request->query('cateId');
        $lstProduct = $this->productService->getListProductByCate($cateId);
        return view('frontend.products.list_product', compact('lstProduct'));
    }

    public function detailProduct($id)
    {
        $product = $this->productService->detailProduct($id);
        $lstProductNotIn = $this->productService->getListProductNotIn($product->category_id, $id);
        $lstCate = $this->cateService->getListCate();
        if ($product && $product->status == Config::STATUS_ACTIVE) {
            return view('frontend.products.detail_product', compact('product', 'lstProductNotIn', 'lstCate'));
        }
        return view('frontend.products.detail_product', compact('product', 'lstCate'))->with(['message_error' => Message::MESSAGE_PRODUCT_NOT_FOUND]);
    }

    public function getListCate() {
        $lstCate = $this->cateService->getListCate();
        return view('frontend.products.list_cate', compact('lstCate'));
    }
}
