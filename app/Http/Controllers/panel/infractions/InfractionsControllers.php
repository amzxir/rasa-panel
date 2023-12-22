<?php

namespace App\Http\Controllers\panel\infractions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfractionsControllers extends Controller
{
    public function index () {
        return view('panel.infractions.infractions');
    }
}
