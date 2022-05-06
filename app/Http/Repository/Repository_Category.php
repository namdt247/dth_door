<?php

namespace App\Http\Repository;

use App\Helper\Config;
use App\Models\Category;

class Repository_Category {
    public function getListCate() {
        return Category::where('status', '!=', Config::STATUS_DELETED)
            ->orderby('created_at', 'desc')
            ->get();
    }
}