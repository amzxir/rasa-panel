<?php

namespace App\Http\Controllers\panel\reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColleagueControllers extends Controller
{
    public function index (){
        return view('panel.reports.colleague');
    }
}
