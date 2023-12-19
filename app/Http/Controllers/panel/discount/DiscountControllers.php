<?php

namespace App\Http\Controllers\panel\discount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountControllers extends Controller
{
    public function index (){
        return view('panel.discount.discount');
    }
}
