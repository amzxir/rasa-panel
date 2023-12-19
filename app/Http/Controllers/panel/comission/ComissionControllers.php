<?php

namespace App\Http\Controllers\panel\comission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComissionControllers extends Controller
{
    public function index (){
        return view('panel.comission.comission');
    }
}
