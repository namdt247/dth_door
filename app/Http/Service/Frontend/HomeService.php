<?php

namespace App\Http\Service\Frontend;

class HomeService extends FrontendService {
    public function getListProductNewest() {
        return $this->repository_product->getListProductNewest();
    }
}
