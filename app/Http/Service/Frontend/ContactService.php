<?php

namespace App\Http\Service\Frontend;

use Illuminate\Http\Request;

class ContactService extends FrontendService {
    public function createContact(Request $request) {
        $arr = [
            'fullName' => $request->txtFullName,
            'phone' => $request->txtPhone,
            'email' => $request->txtEmail,
            'message' => $request->txtMessage
        ];
        return $this->repositoty_contact->createContact($arr);
    }
}