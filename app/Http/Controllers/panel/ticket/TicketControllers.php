<?php

namespace App\Http\Controllers\panel\ticket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketControllers extends Controller
{
    public function create (){
        return view('panel.ticket.create');
    }
}
