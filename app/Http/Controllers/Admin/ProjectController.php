<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Message;
use App\Helper\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $projectService;

    public function __construct() {
        $this->projectService = new ProjectService();
    }

    public function getListProjectPagination()
    {
        $lstProject = $this->projectService->listProjectPagination();
        return view('/admin/project/list', compact('lstProject'));
    }

    public function getAddProject() {
        return view('/admin/project/add');
    }

    public function createProject(Request $request) {
        if ($this->projectService->createProject($request)) {
            return redirect('/admin/project/list')->with(['message_success' => Message::MESSAGE_CREATE_SUCCESS]);
        }
        return redirect('/admin/project/list')->with(['message_error' => Message::MESSAGE_CREATE_FAILED]);
    }

    public function getDetailProject(Request $request) {
        $project = $this->projectService->detailProject($request);
        if($project) {
            return view('/admin/project/detail', compact('project'));
        }
        return redirect('/admin/project/list')->with(['message_error' => Message::MESSAGE_RECORD_NOT_FOUND]);
    }

    public function updateProject(Request $request) {
        if($this->projectService->updateProject($request)) {
            return redirect('/admin/project/list')->with(['message_success' => Message::MESSAGE_UPDATE_SUCCESS]);
        }
        return redirect('/admin/project/list')->with(['message_error' => Message::MESSAGE_RECORD_NOT_FOUND]);
    }

    public function deleteProject($id) {
        if ($id) {
            $code = $this->projectService->deleteProject($id);
            if ($code == StatusCode::STATUS_SUCCESS) {
                return redirect('/admin/project/list')->with(['message_success' => Message::MESSAGE_DELETE_SUCCESS]);
            }
            return redirect('/admin/project/list')->with(['message_error' => Message::MESSAGE_DELETE_FAILED]);
        }
        return redirect('/admin/project/list')->with(['message_error' => Message::MESSAGE_ERROR]);
    }
}
