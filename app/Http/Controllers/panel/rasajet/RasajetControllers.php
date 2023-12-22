<?php

namespace App\Http\Controllers\panel\rasajet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RasajetControllers extends Controller
{
    public function index (){
        return view('panel.rasajet.rasajet');
    }
}
