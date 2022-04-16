<?php

namespace App\Http\Repository;

use App\Helper\Config;
use App\Models\Product;

class Repository_Product {
    public function getListProduct() {
        return Product::where('status', '!=', Config::STATUS_DELETED)
            ->orderby('created_at', 'desc')
            ->paginate(Config::NUMBER_PER_PAGE_CUSTOMER);
    }

    public function getListProductNotIn($prdId) {
        return Product::whereNotIn('id', [$prdId])
            ->where('status', '!=', Config::STATUS_DELETED)
            ->orderby('created_at', 'desc')
            ->take(3)
            ->get();
    }

    public function getListProductNewest() {
        return Product::where('status', '!=', Config::STATUS_DELETED)
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