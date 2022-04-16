<?php

namespace App\Http\Repository;

use App\Models\Contact;

class Repository_Contact {
    public function createContact($array) {
        return Contact::create($array);
    }
}