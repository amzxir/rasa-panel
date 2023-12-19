<?php

namespace App\Http\Controllers\panel\faq;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqControllers extends Controller
{
    public function index (){
        
        return view('panel.faq.faq');
    }
}
