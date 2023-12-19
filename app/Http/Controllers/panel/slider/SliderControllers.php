<?php

namespace App\Http\Controllers\panel\slider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderControllers extends Controller
{
    public function index () {
        return view('panel.slider.slider');
    }
}
