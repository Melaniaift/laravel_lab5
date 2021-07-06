<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootstrapController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function list(){
        return view('list');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
}
