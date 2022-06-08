<?php

namespace App\Http\Service\Frontend;

class ProductService extends FrontendService {
    public function getListProductByCate($catId) {
        return $this->repository_product->getListProductByCate($catId);
    }

    public function detailProduct($prdId) {
        return $this->repository_product->detailProduct($prdId);
    }

    public function getListProductNotIn($cateId, $prdId) {
        return $this->repository_product->getListProductNotIn($cateId, $prdId);
    }
}