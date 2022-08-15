<?php

namespace App\Http\Repository;

use App\Helper\Config;
use App\Helper\Query;
use App\Models\Contact;

class Repository_Contact {
    public function createContact($array) {
        return Contact::create($array);
    }

    public function getListContactPagination() {
        return Contact::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->paginate(Config::NUMBER_PER_PAGE_ADMIN);
    }

    public function detailContact($id) {
        return Contact::where(Query::ID, $id)
            ->where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->first();
    }
}
