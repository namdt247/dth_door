<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/15/22
 */

namespace App\Http\Service\Admin;

class UserService extends AdminService
{
    public function listUserPagination() {
        return $this->repository_user->getListUserPagination();
    }
}
