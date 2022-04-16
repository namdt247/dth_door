<?php

namespace App\Http\Service\Frontend;

class ProductService extends FrontendService {
    public function getListProduct() {
        return $this->repository_product->getListProduct();
    }

    public function detailProduct($prdId) {
        return $this->repository_product->detailProduct($prdId);
    }

    public function getListProductNotIn($prdId) {
        return $this->repository_product->getListProductNotIn($prdId);
    }
}