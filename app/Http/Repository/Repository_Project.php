<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 10/24/22
 */

namespace App\Http\Repository;

use App\Helper\Config;
use App\Helper\Query;
use App\Models\Project;

class Repository_Project
{
    public function getListProject() {
        return Project::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->orderby(Query::CREATED_AT, Query::ORDER_BY_DESC)
            ->get();
    }

    public function listProjectPagination() {
        return Project::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->paginate(Config::NUMBER_PER_PAGE_ADMIN);
    }

    public function createProject($data = array()) {
        return Project::create($data);
    }

    public function detailProject($id) {
        return Project::where(Query::ID, $id)
            ->where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->first();
    }
}
