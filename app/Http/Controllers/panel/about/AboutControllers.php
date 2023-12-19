<?php

namespace App\Http\Controllers\panel\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutControllers extends Controller
{
    public function index (){
        return view('panel.about.about');
    }
}
