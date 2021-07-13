<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Holiday;

class PageController extends Controller
{
    
    public function index(){
        return view('home.homepage');
    }

    public function holiday() {

        $holidays = Holiday::all();
        
        return view('holidays.index', compact('holidays'));
    }
}

