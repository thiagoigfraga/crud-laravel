<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class HomeController extends Controller
{

    public function  showHomeView() {
        $notes = Note::all();
        return view('home', ['note' => $notes]);
    }
}

