<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 10/24/22
 */

namespace App\Http\Service\Admin;

use App\Helper\Config;
use App\Helper\StatusCode;
use Illuminate\Http\Request;

class ProjectService extends AdminService
{
    public function listProjectPagination() {
        return $this->repositoty_project->listProjectPagination();
    }

    public function listProject() {
        return $this->repositoty_project->getListProject();
    }

    public function createProject(Request $request) {
        $arrImg = $request->thumbnails;
        $thumbnail = '';
        if ($arrImg) {
            foreach ($arrImg as $img) {
                $thumbnail .= $img . ',';
            }
        }
        $data = [
            'name' => $request->name,
            'thumbnail' => $thumbnail,
            'type' => $request->type
        ];
        return $this->repositoty_project->createProject($data);
    }

    public function detailProject(Request $request) {
        $id = $request->query('projectId');
        return $this->repositoty_project->detailProject($id);
    }

    public function updateProject(Request $request): bool
    {
        $id = $request->query('projectId');
        $project = $this->repositoty_project->detailProject($id);
        $thumbnail = '';
        if ($project) {
            $arrImg = $request->thumbnails;
            if ($arrImg) {
                foreach ($arrImg as $img) {
                    $thumbnail .= $img . ',';
                }
            }
            $project->name = $request->name;
            $project->thumbnail = $thumbnail;
            $project->type = $request->type;
            return $project->save();
        }
        return false;
    }

    public function deleteProject($id): int
    {
        $project = $this->repositoty_project->detailProject($id);
        if ($project) {
            $project->status = Config::STATUS_DELETED;
            $project->save();
            return StatusCode::STATUS_SUCCESS;
        }
        return StatusCode::STATUS_ERROR;
    }
}
