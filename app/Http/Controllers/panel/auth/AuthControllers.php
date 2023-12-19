<?php

namespace App\Http\Controllers\panel\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthControllers extends Controller
{
    public function index (){
        return view('panel.auth.auth');
    }
}
