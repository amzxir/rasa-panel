<?php

namespace App\Http\Controllers\panel\route;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteControllers extends Controller
{
    public function create (){
        return view('panel.route.create');
    }

    public function manage (){
        return view('panel.route.manage');
    }
}
