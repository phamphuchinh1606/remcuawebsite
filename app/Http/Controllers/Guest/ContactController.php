<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('guest.contact.contact');
    }

    public function sendContact(Request$request){

    }
}
