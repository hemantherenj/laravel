<?php

namespace App\Http\Controllers\FRONTEND;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home() 
    {
        return view('FRONTEND.Pages.home');
    }
}
