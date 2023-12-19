<?php

namespace App\Http\Controllers\panel\brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandControllers extends Controller
{
    public function create (){

        return view('panel.brand.create');
    }

    public function manage (){
        
        return view('panel.brand.manage');
    }
}
