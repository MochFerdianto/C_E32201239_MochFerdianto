<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller,
Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
}
