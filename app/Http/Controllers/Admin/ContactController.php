<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Message;
use App\Helper\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\AdminService;
use App\Http\Service\Admin\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct() {
        $this->contactService = new ContactService();
    }
    public function getListContact()
    {
        $lstContact = $this->contactService->listContactPagination();
        return view('/admin/contact/list', compact('lstContact'));
    }

    public function getDetailContact(Request $request)
    {
        $contact = $this->contactService->detailContact($request);
        $lstContactStatus = $this->contactService->listContactStatus();
        if ($contact) {
            return view('/admin/contact/detail', compact('contact', 'lstContactStatus'));
        }
        return redirect('/admin/contact/list')->with(['message_error' => Message::MESSAGE_RECORD_NOT_FOUND]);
    }

    public function updateContact(Request $request)
    {
        $code = $this->contactService->updateContact($request);
        if ($code == StatusCode::STATUS_SUCCESS) {
            return redirect()->back()->with(['message_success' => Message::MESSAGE_UPDATE_SUCCESS]);
        }
        if ($code == StatusCode::CONTACT_UPDATED) {
            return redirect()->back()->with(['message_error' => Message::MESSAGE_CONTACT_UPDATED]);
        }
        return redirect('/admin/contact/list')->with(['message_error' => Message::MESSAGE_RECORD_NOT_FOUND]);
    }

    public function deleteContact($id)
    {
        if ($id) {
            if ($this->contactService->deleteContact($id)) {
                return redirect('/admin/contact/list')->with(['message_success' => Message::MESSAGE_DELETE_SUCCESS]);
            }
            return redirect('/admin/contact/list')->with(['message_error' => Message::MESSAGE_RECORD_NOT_FOUND]);
        }
        return redirect('/admin/contact/list')->with(['message_error' => Message::MESSAGE_ERROR]);
    }

    public function cancelContact(Request $request) {
        $code = $this->contactService->cancelContact($request);
        switch ($code) {
            case StatusCode::CONTACT_CANCELED:
                return redirect()->back()->with(['message_error' => Message::MESSAGE_CONTACT_CANCELED]);
            case StatusCode::CONTACT_NOT_CANCEL:
                return redirect()->back()->with(['message_error' => Message::MESSAGE_CONTACT_NOT_CANCEL]);
            case StatusCode::STATUS_SUCCESS:
                return redirect()->back()->with(['message_success' => Message::MESSAGE_UPDATE_SUCCESS]);
            default:
                return redirect('/admin/contact/list')->with(['message_error' => Message::MESSAGE_RECORD_NOT_FOUND]);
        }
    }
}
