<?php

namespace App\Http\Controllers\panel\symbol;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SymbolControllers extends Controller
{
    public function index (){
        return view('panel.symbol.symbol');
    }
}
