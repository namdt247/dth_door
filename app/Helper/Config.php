<?php

namespace App\Helper;

class Config {
    const STATUS_ACTIVE = 1;
    const STATUS_PENDING = 2;
    const STATUS_DELETED = -1;

    const NUMBER_PER_PAGE_CUSTOMER = 6;
    const NUMBER_PER_PAGE_ADMIN = 10;

    const ROLE_USER_SP_ADMIN = 1;
    const ROLE_USER_ADMIN = 2;
    const ROLE_USER_MODERATOR = 3;
    const ROLE_USER_NORMAL = 4;
}