<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/15/22
 */

namespace App\Http\Service\Admin;

use Illuminate\Http\Request;

class CategoryService extends AdminService
{
    public function listCategoryPagination() {
        return $this->repositoty_category->listCatePagination();
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
}