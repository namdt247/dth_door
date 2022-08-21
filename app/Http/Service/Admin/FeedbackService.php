<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/21/22
 */

namespace App\Http\Service\Admin;

use Illuminate\Http\Request;

class FeedbackService extends AdminService
{
    public function listFeedbackPagination() {
        return $this->repositoty_feedback->getListFeedbackPagination();
    }

    public function detailFeedback(Request $request) {
        $id = $request->query('feedbackId');
        return $this->repositoty_feedback->detailFeedback($id);
    }

    public function updateFeedback(Request $request): bool
    {
        $id = $request->query('feedbackId');
        $feedback = $this->repositoty_feedback->detailFeedback($id);
        if ($feedback) {
            $feedback->fb_name = $request->fb_name;
            $feedback->fb_position = $request->fb_position;
            $feedback->fb_content = $request->fb_content;
            return $feedback->save();
        }
        return false;
    }
}
