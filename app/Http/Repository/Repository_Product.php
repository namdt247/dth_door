<?php

namespace App\Http\Repository;

use App\Helper\Config;
use App\Models\Product;

class Repository_Product {
    public function getListProductByCate($cateId) {
        return Product::where('category_id', '=', $cateId)
            ->where('status', '!=', Config::STATUS_DELETED)
            ->orderby('created_at', 'desc')
            ->paginate(Config::NUMBER_PER_PAGE_CUSTOMER);
    }

    public function getListProductNotIn($cateId, $prdId) {
        return Product::where('category_id', '=', $cateId)
            ->whereNotIn('id', [$prdId])
            ->where('status', '!=', Config::STATUS_DELETED)
            ->orderby('created_at', 'desc')
            ->take(3)
            ->get();
    }

    public function getListProductNewest() {
        return Product::where('category_id', '=', 1)
            ->where('status', '!=', Config::STATUS_DELETED)
            ->orderby('created_at', 'desc')
            ->take(3)
            ->get();
    }

    public function detailProduct($prdId) {
        return Product::where('id', '=', $prdId)
            ->where('status', '=', Config::STATUS_ACTIVE)
            ->first();
    }
}