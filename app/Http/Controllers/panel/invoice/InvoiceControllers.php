<?php

namespace App\Http\Controllers\panel\invoice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceControllers extends Controller
{
    public function index (){
        return view('panel.invoice.invoice');
    }
}
