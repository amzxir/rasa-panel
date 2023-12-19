<?php

namespace App\Http\Controllers\panel\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryControllers extends Controller
{
    public function create (){

        return view('panel.category.create');
    }

    public function manage (){
        
        return view('panel.category.manage');
    }

    public function tree (){
        
        return view('panel.category.tree');
    }
}
