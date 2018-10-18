<?php

namespace App\Logics;
use App\Models\Contact;

class ContactLogic extends BaseLogic{

    public function getAll($limitPage)
    {
        return Contact::orderBy('created_at', 'desc')->paginate($limitPage);
    }

    public function create($params = []){
        $contact = new Contact();
        $contact->guest_name = $params['GuestName'];
        $contact->guest_phone = $params['GuestPhone'];
        $contact->guest_email = $params['GuestEmail'];
    }
}
