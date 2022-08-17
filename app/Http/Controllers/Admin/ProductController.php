<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Message;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\CategoryService;
use App\Http\Service\Admin\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    protected $cateService;

    public function __construct()
    {
        $this->productService = new ProductService();
        $this->cateService = new CategoryService();
    }

    public function getListProduct()
    {
        $lstPrd = $this->productService->listProductPagination();
        return view('/admin/product/list', compact('lstPrd'));
    }

    public function getAddProduct()
    {
        $lstCate = $this->cateService->listCategory();
        return view('/admin/product/add', compact('lstCate'));
    }

    public function addProduct(Request $request)
    {
        if ($this->productService->createProduct($request)) {
            return redirect('/admin/product/list')->with(['message_success' => Message::MESSAGE_CREATE_SUCCESS]);
        }
        return redirect('/admin/product/list')->with(['message_error' => Message::MESSAGE_CREATE_FAILED]);
    }

    public function detailProduct(Request $request)
    {
        $product = $this->productService->detailProduct($request);
        $lstCate = $this->cateService->listCategory();
        return view('/admin/product/detail', compact('product', 'lstCate'));
    }

    protected function updateProduct(Request $request)
    {
        if($this->productService->updateProduct($request)) {
            return redirect('/admin/product/list')->with(['message_success' => Message::MESSAGE_UPDATE_SUCCESS]);
        }
        return redirect('/admin/product/list')->with(['message_error' => Message::MESSAGE_UPDATE_FAILED]);
    }

    protected function deleteProduct($id)
    {
        if($id && $this->productService->deleteProduct($id)) {
            return redirect('/admin/product/list')->with(['message_success' => Message::MESSAGE_DELETE_SUCCESS]);
        }
        return redirect('/admin/product/list')->with(['message_error' => Message::MESSAGE_DELETE_FAILED]);
    }
}
