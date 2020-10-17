<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $title = 'Fast Parking';
        $caption = 'Bem Vindo';
        return view('Main.index', compact('title','caption'));
    }
}
