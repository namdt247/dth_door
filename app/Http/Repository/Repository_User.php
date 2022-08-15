<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/15/22
 */

namespace App\Http\Repository;

use App\Helper\Config;
use App\Helper\Query;
use App\Models\User;

class Repository_User
{
    public function getListUserPagination() {
        return User::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->paginate(Config::NUMBER_PER_PAGE_ADMIN);
    }
}
