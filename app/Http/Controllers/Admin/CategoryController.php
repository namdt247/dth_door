<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Message;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $cateService;

    public function __construct() {
        $this->cateService = new CategoryService();
    }

    public function getListCatePagination()
    {
        $lstCate = $this->cateService->listCategoryPagination();
        return view('/admin/category/list', compact('lstCate'));
    }

    public function getAddCate() {
        return view('/admin/category/add');
    }

    public function createCate(Request $request) {
        if ($this->cateService->createCate($request)) {
            return redirect('/admin/cate/list')->with(['message_success' => Message::MESSAGE_CREATE_SUCCESS]);
        }
        return redirect('/admin/cate/list')->with(['message_error' => Message::MESSAGE_CREATE_FAILED]);
    }

    public function getDetailCate(Request $request) {
        $cate = $this->cateService->detailCate($request);
        return view('/admin/category/detail', compact('cate'));
    }

    public function updateCate(Request $request) {
        if($this->cateService->updateCate($request)) {
            return redirect('/admin/cate/list')->with(['message_success' => Message::MESSAGE_UPDATE_SUCCESS]);
        }
        return redirect('/admin/cate/list')->with(['message_error' => Message::MESSAGE_UPDATE_FAILED]);
    }

    public function deleteCate($id) {
        if($id && $this->cateService->deleteCate($id)) {
            return redirect('/admin/cate/list')->with(['message_success' => Message::MESSAGE_DELETE_SUCCESS]);
        }
        return redirect('/admin/cate/list')->with(['message_error' => Message::MESSAGE_DELETE_FAILED]);
    }
}
