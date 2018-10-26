<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('guest.about.about');
    }
}
