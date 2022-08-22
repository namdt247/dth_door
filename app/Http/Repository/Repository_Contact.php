<?php

namespace App\Http\Repository;

use App\Helper\Config;
use App\Helper\Query;
use App\Models\Contact;
use App\Models\Contact_status;

class Repository_Contact {
    public function createContact($array) {
        return Contact::create($array);
    }

    public function getListContactPagination() {
        return Contact::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->orderBy(Query::CREATED_AT, Query::ORDER_BY_DESC)
            ->paginate(Config::NUMBER_PER_PAGE_ADMIN);
    }

    public function detailContact($id) {
        return Contact::where(Query::ID, $id)
            ->where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->first();
    }

    public function getTotalContact() {
        return Contact::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->count();
    }

    public function getTotalContactInMonth($month) {
        return Contact::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->whereMonth(Query::CREATED_AT, Query::EQUAL, $month)
            ->count();
    }

    public function getTotalContactInPending() {
        return Contact::whereNotIn(Query::STATUS, [Config::STATUS_DELETED, Config::CONTACT_COMPETE, Config::CONTACT_CANCEL])
            ->count();
    }

    public function listContactStatus() {
        return Contact_status::where(Query::STATUS, Query::NOT_EQUAL, Config::STATUS_DELETED)
            ->get();
    }

    public function getContactStatus($id) {
        return Contact_status::where(Query::ID, Query::EQUAL, $id)
            ->first();
    }
}
