<?php

namespace App\Http\Controllers\panel\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactControllers extends Controller
{
    public function index (){
        return view('panel.contact.contact');
    }
}
