<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/15/22
 */

namespace App\Http\Service\Admin;

use App\Helper\Config;
use Illuminate\Http\Request;

class ContactService extends AdminService
{
    public function listContactPagination() {
        return $this->repositoty_contact->getListContactPagination();
    }

    public function detailContact(Request $request) {
        $id = $request->query('contactId');
        return $this->repositoty_contact->detailContact($id);
    }

    public function updateContact(Request $request): bool
    {
        $id = $request->query('contactId');
        $contact = $this->repositoty_contact->detailContact($id);
        if ($contact) {
            $contact->status = (int)$request->status;
            return $contact->save();
        }
        return false;
    }

    public function deleteContact($id): bool
    {
        $contact = $this->repositoty_contact->detailContact($id);
        if ($contact) {
            $contact->status = Config::STATUS_DELETED;
            return $contact->save();
        }
        return false;
    }
}
