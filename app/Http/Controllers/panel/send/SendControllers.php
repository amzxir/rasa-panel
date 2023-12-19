<?php

namespace App\Http\Controllers\panel\send;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendControllers extends Controller
{
    public function index (){
        return view('panel.send.send');
    }
}
