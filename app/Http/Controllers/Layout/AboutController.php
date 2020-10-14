<?php

namespace App\Http\Controllers\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
class AboutController extends Controller
{


    public function contact()
    {
        return view("layout.about.contactUs");
    }

    public function about()
    {
        // $slides=Slide::orderBy('created_at','desc')->where('name','about')->get();
        return view("layout.about.aboutUs");
    }
}
