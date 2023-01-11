<?php

namespace App\Business;

use App\Models\Contact;

class Contacts {
    public function store (array $post) {
        return Contact::create($post);
    }
}
