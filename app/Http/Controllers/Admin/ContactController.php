<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Message;
use App\Http\Controllers\Controller;
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
        return view('/admin/contact/detail', compact('contact'));
    }

    public function updateContact(Request $request)
    {
        if ($this->contactService->updateContact($request)) {
            return redirect('/admin/contact/list')->with(['message_success' => Message::MESSAGE_UPDATE_SUCCESS]);
        }
        return redirect('/admin/contact/list')->with(['message_error' => Message::MESSAGE_UPDATE_FAILED]);
    }

    public function deleteContact($id)
    {
        if ($id && $this->contactService->deleteContact($id)) {
            return redirect('/admin/contact/list')->with(['message_success' => Message::MESSAGE_DELETE_SUCCESS]);
        }
        return redirect('/admin/contact/list')->with(['message_error' => Message::MESSAGE_DELETE_FAILED]);
    }
}
