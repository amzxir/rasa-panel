<?php

namespace App\Http\Controllers\panel\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductControllers extends Controller
{
    public function create (){
        
        return view('panel.product.create');
    }

    public function manage (){
        
        return view('panel.product.manage');
    }

    public function edit (){
        
        return view('panel.product.edit');
    }
}
