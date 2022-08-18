<?php

namespace App\Http\Service\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactService extends FrontendService {
    public function createContact(Request $request) {
        $data = [
            'fullName' => $request->txtFullName,
            'phone' => $request->txtPhone,
            'email' => $request->txtEmail,
            'message' => $request->txtMessage
        ];

        $dataSendMail = [
            'fullName' => $request->txtFullName,
            'phone' => $request->txtPhone,
            'email' => $request->txtEmail,
            'txtMessage' => $request->txtMessage
        ];

        try {
            // Send mail
            Mail::send('mail.notification', $dataSendMail, function ($message) {
                $message->to('dthdoor68@gmail.com', 'Phòng tư vấn DTH')
                    ->subject('Khách hàng DTH Door cần tư vấn sản phẩm');
                $message->from('noreply.dthdoor@gmail.com', 'DTH Door Support');
            });
        } catch (\Exception $exception) {
            // error
        } finally {
            return $this->repositoty_contact->createContact($data);
        }
    }
}
