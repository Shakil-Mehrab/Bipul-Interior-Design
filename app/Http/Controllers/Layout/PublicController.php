<?php

namespace App\Http\Controllers\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Category;
use App\Models\Product;

class PublicController extends Controller
{
    public function welcome(){
        $slides=Slide::orderBy('id','desc')->get();
        $products=Product::orderBy('id','desc')->where('status',1)->get();
        return view('welcome',compact(['slides','products']));
    }

    public function gridIndex($id=null){
        $category=Category::find($id);
        return view('layout.category.category',compact('category'));
    }

    public function detail($id=null){
        $product=Product::find($id);
        return view('layout.product.single',compact('product'));
    }
}
