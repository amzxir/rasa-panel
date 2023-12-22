<?php

namespace App\Http\Controllers\panel\center;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageControllers extends Controller
{
    public function index (){
        return view('panel.center.message');
    }
}
