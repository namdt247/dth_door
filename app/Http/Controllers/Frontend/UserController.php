<?php

namespace App\Http\Controllers\Frontend;

use App\Helper\Message;
use App\Http\Controllers\Controller;
use App\Http\Service\Frontend\CategoryService;
use App\Http\Service\Frontend\ContactService;
use App\Http\Service\Frontend\HomeService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $homeService;
    protected $contactService;
    protected $cateService;

    public function __construct(){
        $this->homeService = new HomeService();
        $this->contactService = new ContactService();
        $this->cateService = new CategoryService();
    }

    public function homePage()
    {
        $lstProductNewest = $this->homeService->getListProductNewest();
        $lstCate = $this->cateService->getListCate();
        return view('frontend.home', compact('lstProductNewest', 'lstCate'));
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
            return redirect()->back()->with(['success_message' => Message::MESSAGE_SEND_REQUEST_SUCCESS]);
        else
            return redirect()->back()->with(['error_message' => Message::MESSAGE_SEND_REQUEST_FAILED]);
    }
}
