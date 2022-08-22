<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/15/22
 */

namespace App\Http\Service\Admin;

use App\Helper\Config;
use App\Helper\StatusCode;
use Illuminate\Http\Request;

class CategoryService extends AdminService
{
    public function listCategoryPagination() {
        return $this->repositoty_category->listCatePagination();
    }

    public function listCategory() {
        return $this->repositoty_category->getListCate();
    }

    public function createCate(Request $request) {
        $data = [
            'name' => $request->name,
            'note' => $request->note
        ];
        return $this->repositoty_category->createCate($data);
    }

    public function detailCate(Request $request) {
        $id = $request->query('cateId');
        return $this->repositoty_category->detailCate($id);
    }

    public function updateCate(Request $request): bool
    {
        $id = $request->query('cateId');
        $cate = $this->repositoty_category->detailCate($id);
        if ($cate) {
            $cate->name = $request->name;
            $cate->note = $request->note;
            return $cate->save();
        }
        return false;
    }

    public function deleteCate($id): int
    {
        $cate = $this->repositoty_category->detailCate($id);
        if ($cate) {
            $cateHasProducts = $this->repository_product->getListProductByCate2($cate->id);
            if(count($cateHasProducts) > 0) {
                return StatusCode::CATE_HAS_PRODUCT;
            }
            $cate->status = Config::STATUS_DELETED;
            $cate->save();
            return StatusCode::STATUS_SUCCESS;
        }
        return StatusCode::STATUS_ERROR;
    }
}
