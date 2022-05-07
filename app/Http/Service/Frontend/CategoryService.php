<?php

namespace App\Http\Service\Frontend;

class CategoryService extends FrontendService {
    public function getListCate() {
        $lstCate = $this->repositoty_category->getListCate();
        foreach ($lstCate as $cate) {
            $cate->lstProduct = $this->repository_product->getListProductByCate2($cate->id);
        }
        return $lstCate;
    }
}