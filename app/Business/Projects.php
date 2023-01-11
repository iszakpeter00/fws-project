<?php

namespace App\Business;

use App\Models\Project;

class Projects {
    public function store (array $post) {
        $contacts = $post['contacts'];
        // $savedContacts = collect([]);
        // foreach ($contacts as $contact) {
        //     $savedContacts->push((new Contacts())->store($contact));
        // }
        // (new Contacts())->store($contacts);
        // $project =
        Project::create($post);
        // $project->contacts()->save($contacts);
    }
}
