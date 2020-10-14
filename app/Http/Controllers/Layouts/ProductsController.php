<?php

namespace App\Http\Controllers\Layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use App\Models\Product;
use App\Models\Category;
use App\Models\Product_image;


use DB;
use Session;
class ProductsController extends Controller
{
    public function addProduct(Request $request){
        if($request->ismethod('post')){
            $data = $request->all();
            $product = new Product;
            $product->category_id = $data['category_id'];
            $product->name = $data['name'];
            $product->slug = $data['slug'];
            $product->code = $data['code'];
            $product->description = $data['description'];
            //Upload image
            if($request->hasfile('image')){
                 echo $img_tmp =$request->file('image');
                if($img_tmp->isValid()){
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'uploads/products/'.$filename;
                Image::make($img_tmp)->resize(426,574)->save($img_path);
                $product->image = $filename;
            }
            }
            $product->save();
            return redirect('/admin/view-products')->with('flash_message_success','Product has been added successfully!!');

        }
        return view('layouts.products.create');
    }
    public function viewProducts(){
        $products = Product::get();
        if(auth()->user()->role_id==1){
            $products = Product::get();
        }else{
            $products = Product::where('shop_id',auth()->user()->shop->id)->get();
        }
        return view('layouts.products.view')->with(compact('products'));
    }
    public function editProduct(Request $request,$id=null){
        if($request->isMethod('post')){
             $data = $request->all();
             //Upload image
            if($request->hasfile('image')){
                echo $img_tmp =$request->file('image');
                if($img_tmp->isValid()){

                //image path code
                $extension = $img_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'uploads/products/'.$filename;

                //image resize
                Image::make($img_tmp)->resize(426,574)->save($img_path);

            }
            }else{
                $filename = $data['current_image'];
            }
            Product::where(['id'=>$id])->update([
            'category_id'=>$data['category_id'],'name'=>$data['name'],'slug'=>$data['slug'],'code'=>$data['code']
            ,'description'=>$data['description'],
            'image'=>$filename]);
            return redirect()->back()->with('flash_message_success','Product has been updated!!');
        }
        $productDetails = Product::where(['id'=>$id])->first();
        $categories = Category::where(['parent_id'=>0])->get();
        return view('layouts.products.edit')->with(compact('productDetails','categories',));
    }
    public function deleteProduct($id=null){
        $product = Product::where(['id'=>$id])->first();
        $image_path = 'uploads/products/';
        if(file_exists($image_path.$product->image)){
            unlink($image_path.$product->image);
        }
        Product::where(['id'=>$id])->delete();
        Alert::success('Deleted Successfully', 'Success Message');
        return redirect()->back()->with('flash_message_error','Product Deleted');
    }
    public function updateStatus(Request $request,$id=null){
        $data = $request->all();
        Product::where('id',$data['id'])->update(['status'=>$data['status']]);

    }
    public function products($id=null){
        $productDetails = Product::with('attributes')->where('id',$id)->first();
        $ProductsAltImages = Product_image::where('product_id',$id)->get();
        $featuredProducts = Product::where(['featured_products'=>1])->get();
        // echo $productDetails;die;
        return view('wayshop.product_details')->with(compact('productDetails','ProductsAltImages','featuredProducts'));
    }
    public function addImages(Request $request,$id=null){
        $productDetails = Product::where(['id'=>$id])->first();
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasfile('image')){
                $files = $request->file('image');
                foreach($files as $file){
                echo $img_tmp =$file;
                    $image = new Product_image;
                    $extension = $file->getClientOriginalExtension();
                    $filename = rand(111,9999).'.'.$extension;
                    $image_path = 'uploads/products/detail/'.$filename;
                    // Image::make($file)->save($image_path);
                    Image::make($img_tmp)->resize(1170,572)->save($image_path);
                    $image->image = $filename;
                    $image->product_id = $data['product_id'];
                    $image->save();

                }
            }
            return redirect('/admin/add-images/'.$id)->with('flash_message_success','Image has been updated');
        }
        $productImages = Product_image::where(['product_id'=>$id])->get();
        return view('layouts.products.image.create')->with(compact('productDetails','productImages'));
    }
    public function deleteAltImage($id=null){
        $productImage = Product_image::where(['id'=>$id])->first();
        $image_path = 'uploads/products/detail/';
        if(file_exists($image_path.$productImage->image)){
            unlink($image_path.$productImage->image);
        }
        Product_image::where(['id'=>$id])->delete();
        Alert::success('Deleted','Success Message');
        return redirect()->back()->with('flash_message_error','Image has been Deleted');
    }
    public function updateFeatured(Request $request,$id=null){
        $data = $request->all();
        Product::where('id',$data['id'])->update(['featured'=>$data['status']]);

    }
}
