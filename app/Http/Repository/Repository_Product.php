<?php

namespace App\Http\Repository;

use App\Helper\Config;
use App\Helper\Query;
use App\Models\Product;

class Repository_Product {
    public function getListProductByCate($cateId) {
        return Product::where(Query::CATE_ID, Query::EQUAL, $cateId)
            ->where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->orderby(Query::CREATED_AT, Query::ORDER_BY_DESC)
            ->paginate(Config::NUMBER_PER_PAGE_CUSTOMER);
    }

    public function getListProductByCate2($cateId) {
        return Product::where(Query::CATE_ID, Query::EQUAL, $cateId)
            ->where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->orderby(Query::CREATED_AT, Query::ORDER_BY_DESC)
            ->get();
    }

    public function getListProductNotIn($cateId, $prdId) {
        return Product::where(Query::CATE_ID, Query::EQUAL, $cateId)
            ->whereNotIn(Query::ID, [$prdId])
            ->where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->orderby(Query::CREATED_AT, Query::ORDER_BY_DESC)
            ->take(Config::TAKE_RECORD_OTHER)
            ->get();
    }

    public function getListProductNewest() {
        return Product::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->orderby(Query::CREATED_AT, Query::ORDER_BY_DESC)
            ->take(Config::TAKE_RECORD_NEWS)
            ->get();
    }

    public function detailProduct($prdId) {
        return Product::where(Query::ID, Query::EQUAL, $prdId)
            ->where(Query::STATUS, Query::EQUAL, Config::STATUS_ACTIVE)
            ->first();
    }

    public function listProductPagination() {
        return Product::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->orderBy(Query::CREATED_AT, Query::ORDER_BY_DESC)
            ->paginate(Config::NUMBER_PER_PAGE_ADMIN);
    }

    public function createProduct($data = array()) {
        return Product::create($data);
    }

    public function getTotalProduct() {
        return Product::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->count();
    }
}
