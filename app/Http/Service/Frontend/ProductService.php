<?php

namespace App\Http\Service\Frontend;

class ProductService extends FrontendService {
    public function getListProductByCate($catId) {
        $cate = $this->repositoty_category->detailCate($catId);
        if($cate) {
            return $this->repository_product->getListProductByCate($catId);
        }
        return null;
    }

    public function detailProduct($prdId) {
        return $this->repository_product->detailProduct($prdId);
    }

    public function getListProductNotIn($cateId, $prdId) {
        return $this->repository_product->getListProductNotIn($cateId, $prdId);
    }
}
