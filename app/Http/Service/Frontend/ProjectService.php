<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 10/25/22
 */

namespace App\Http\Service\Frontend;

class ProjectService extends FrontendService
{
    public function getListProject() {
        return $this->repositoty_project->getListProject();
    }
}
