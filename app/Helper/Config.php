<?php

namespace App\Helper;

class Config {
    const STATUS_ACTIVE = 1;
    const STATUS_PENDING = 2;
    const STATUS_DELETED = -1;

    const TYPE_NORMAL = 1;

    const NUMBER_PER_PAGE_CUSTOMER = 6;
    const NUMBER_PER_PAGE_ADMIN = 10;

    const TAKE_RECORD = 3;
    const TAKE_RECORD_NEWS = 4;
    const TAKE_RECORD_OTHER = 4;

    const ROLE_USER_SP_ADMIN = 1;
    const ROLE_USER_ADMIN = 2;
    const ROLE_USER_MODERATOR = 3;
    const ROLE_USER_NORMAL = 4;

    const CONTACT_RECEIVE = 1;
    const CONTACT_ADVISE = 2;
    const CONTACT_QUOTE = 3;
    const CONTACT_CONTRACT = 4;
    const CONTACT_CONSTRUCTION = 5;
    const CONTACT_ACCEPTANCE = 6;
    const CONTACT_COMPETE = 7;
    const CONTACT_CANCEL = 101;
}
