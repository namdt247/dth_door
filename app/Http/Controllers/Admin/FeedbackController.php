<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Message;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\FeedbackService;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    protected $feedbackService;

    public function __construct()
    {
        $this->feedbackService = new FeedbackService();
    }

    public function getListFeedback()
    {
        $lstFeedback = $this->feedbackService->listFeedbackPagination();
        return view('/admin/feedback/list', compact('lstFeedback'));
    }

    public function getDetailFeedback(Request $request)
    {
        $feedback = $this->feedbackService->detailFeedback($request);
        return view('/admin/feedback/detail', compact('feedback'));
    }

    public function updateFeedback(Request $request)
    {
        if ($this->feedbackService->updateFeedback($request)) {
            return redirect('/admin/feedback/list')->with(['message_success' => Message::MESSAGE_UPDATE_SUCCESS]);
        }
        return redirect('/admin/feedback/list')->with(['message_error' => Message::MESSAGE_UPDATE_FAILED]);
    }
}
