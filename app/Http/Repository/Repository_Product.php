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
            ->take(Config::TAKE_RECORD)
            ->get();
    }

    public function getListProductNewest() {
        return Product::where(Query::CATE_ID, Query::EQUAL, 1)
            ->where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->orderby(Query::CREATED_AT, Query::ORDER_BY_DESC)
            ->take(Config::TAKE_RECORD)
            ->get();
    }

    public function detailProduct($prdId) {
        return Product::where(Query::ID, Query::EQUAL, $prdId)
            ->where(Query::STATUS, Query::EQUAL, Config::STATUS_ACTIVE)
            ->first();
    }
}
