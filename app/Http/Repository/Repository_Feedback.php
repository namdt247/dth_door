<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/21/22
 */

namespace App\Http\Repository;

use App\Helper\Config;
use App\Helper\Query;
use App\Models\Feedback;

class Repository_Feedback
{
    public function getListFeedbackPagination() {
        return Feedback::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->orderBy(Query::CREATED_AT, Query::ORDER_BY_DESC)
            ->paginate(Config::NUMBER_PER_PAGE_ADMIN);
    }

    public function detailFeedback($id) {
        return Feedback::where(Query::ID, $id)
            ->where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->first();
    }
}
