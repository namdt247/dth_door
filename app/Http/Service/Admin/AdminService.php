<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/15/22
 */

namespace App\Http\Service\Admin;

use App\Http\Repository\Repository_Category;
use App\Http\Repository\Repository_Contact;
use App\Http\Repository\Repository_Feedback;
use App\Http\Repository\Repository_Product;
use App\Http\Repository\Repository_Project;
use App\Http\Repository\Repository_User;

class AdminService
{
    protected $repository_user;
    protected $repository_product;
    protected $repositoty_contact;
    protected $repositoty_category;
    protected $repositoty_feedback;
    protected $repositoty_project;

    public function __construct() {
        $this->repository_user = new Repository_User();
        $this->repository_product = new Repository_Product();
        $this->repositoty_contact = new Repository_Contact();
        $this->repositoty_category = new Repository_Category();
        $this->repositoty_feedback = new Repository_Feedback();
        $this->repositoty_project = new Repository_Project();
    }
}
