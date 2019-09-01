<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ticketController extends Controller
{
    public function tickets(){
            return view("admin.tickets");
    }
    public function conversation(){
            return view("admin.conversation");
    }
    public function tickets_filter(Request $request){

    }
}
