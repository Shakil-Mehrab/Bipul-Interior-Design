<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slide;

class HomeController extends Controller
{
    public function home(){

       return view('home');
    }

}
