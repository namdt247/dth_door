<?php

namespace App\Http\Service\Frontend;

class CategoryService extends FrontendService {
    public function getListCate() {
        return $this->repositoty_category->getListCateWithProduct();;
    }
}