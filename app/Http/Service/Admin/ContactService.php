<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/15/22
 */

namespace App\Http\Service\Admin;

use App\Helper\Config;
use App\Helper\StatusCode;
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

    public function updateContact(Request $request): int
    {
        $id = $request->query('contactId');
        $statusUpdate = $request->status_update;
        $processDate = $request->process_date;
        $processContent = $request->process_content;

        $contact = $this->repositoty_contact->detailContact($id);
        if ($contact) {
            if ($contact->status >= $statusUpdate) {
                return StatusCode::CONTACT_UPDATED;
            }

            $contactStt = $this->repositoty_contact->getContactStatus($statusUpdate);

            $contactContent = unserialize($contact->ct_content);
            $contactContent[$contactStt->stt_name] = [
                'date_process' => $statusUpdate ? date("Y/m/d", strtotime($processDate)) : date("Y/m/d"),
                'date_update' => date("Y/m/d"),
                'content' => $processContent,
            ];

            $contact->status = $statusUpdate;
            $contact->ct_content = serialize($contactContent);
            $contact->save();
            return StatusCode::STATUS_SUCCESS;
        }
        return StatusCode::STATUS_ERROR;
    }

    public function cancelContact(Request $request): int
    {
        $id = $request->query('contactId');

        $contact = $this->repositoty_contact->detailContact($id);
        if ($contact) {
            if ($contact->status == Config::CONTACT_CANCEL) {
                return StatusCode::CONTACT_CANCELED;
            }

            if ($contact->status >= Config::CONTACT_CONTRACT) {
                return StatusCode::CONTACT_NOT_CANCEL;
            }

            $contactStt = $this->repositoty_contact->getContactStatus(Config::CONTACT_CANCEL);

            $contactContent = unserialize($contact->ct_content);
            $contactContent[$contactStt->stt_name] = [
                'date_process' => date("Y/m/d"),
                'date_update' => date("Y/m/d"),
                'content' => 'Đóng liên hệ',
            ];

            $contact->status = Config::CONTACT_CANCEL;
            $contact->ct_content = serialize($contactContent);
            $contact->save();
            return StatusCode::STATUS_SUCCESS;
        }
        return StatusCode::STATUS_ERROR;
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

    public function getTotalContact() {
        return $this->repositoty_contact->getTotalContact();
    }

    public function getTotalContactInMonth() {
        $month = date('m');
        return $this->repositoty_contact->getTotalContactInMonth($month);
    }

    public function getTotalContactPending() {
        return $this->repositoty_contact->getTotalContactInPending();
    }

    public function listContactStatus() {
        return $this->repositoty_contact->listContactStatus();
    }
}
