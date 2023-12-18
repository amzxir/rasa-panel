<?php

namespace App\Http\Controllers\panel\motor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MotorControllers extends Controller
{
    public function create (){

        return view('panel.formsaz.create');
    }

    public function manage (){
        
        return view('panel.formsaz.manage');
    }
}
