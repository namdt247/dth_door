<?php

namespace App\Http\Service\Frontend;

use App\Http\Repository\Repository_Category;
use App\Http\Repository\Repository_Contact;
use App\Http\Repository\Repository_Product;

class FrontendService {
    protected $repository_product;
    protected $repositoty_contact;
    protected $repositoty_category;

    public function __construct() {
        $this->repository_product = new Repository_Product();
        $this->repositoty_contact = new Repository_Contact();
        $this->repositoty_category = new Repository_Category();
    }
}
