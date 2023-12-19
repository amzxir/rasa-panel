<?php

namespace App\Http\Controllers\panel\Provision;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProvisionControllers extends Controller
{
    public function index (){
        return view('panel.provision.provision');
    }
}
