<?php

namespace App\Http\Repository;

use App\Helper\Config;
use App\Helper\Query;
use App\Models\Category;

class Repository_Category {
    public function getListCateWithProduct() {
        return Category::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->orderby(Query::CREATED_AT, Query::ORDER_BY_ASC)
            ->with(Query::WITH_PRODUCT)
            ->get();
    }

    public function getListCate() {
        return Category::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->orderby(Query::CREATED_AT, Query::ORDER_BY_DESC)
            ->get();
    }

    public function listCatePagination() {
        return Category::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->paginate(Config::NUMBER_PER_PAGE_ADMIN);
    }

    public function createCate($data = array()) {
        return Category::create($data);
    }

    public function detailCate($id) {
        return Category::where(Query::ID, $id)
            ->where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->first();
    }
}
