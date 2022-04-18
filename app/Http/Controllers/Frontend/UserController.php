<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Service\Frontend\ContactService;
use App\Http\Service\Frontend\HomeService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $homeService;
    protected $contactService;

    public function __construct(){
        $this->homeService = new HomeService();
        $this->contactService = new ContactService();
    }

    public function homePage()
    {
        $lstProductNewest = $this->homeService->getListProductNewest();
        return view('frontend.home', compact('lstProductNewest'));
    }

    public function aboutUs()
    {
        return view('frontend.about_us');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function postContact(Request $request) {
        $isCreateContact = $this->contactService->createContact($request);
        if ($isCreateContact)
            return redirect()->back()->with(['success_message' => 'Gửi yêu cầu thành công, chúng tôi sẽ sớm liên hệ với bạn']);
        else
            return redirect()->back()->with(['error_message' => 'Gửi yêu cầu thất bại, vui lòng thử lại']);
    }
}
