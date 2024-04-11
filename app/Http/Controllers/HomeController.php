<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    function  showHomeView() {
        return view('home');
    }
}
