<?php

namespace App\Http\Controllers\panel\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserControllers extends Controller
{
    public function create (){

        return view('panel.user.create');
    }

    public function manage (){
        
        return view('panel.user.manage');
    }
}
