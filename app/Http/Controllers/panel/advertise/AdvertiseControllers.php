<?php

namespace App\Http\Controllers\panel\advertise;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertiseControllers extends Controller
{
    public function index (){
        return view('panel.advertise.advertise');
    }
}
