<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
class AdminAboutController extends Controller
{
    public function addCategory (Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $category = new About;
            $category->heading = $data['heading'];
            $category->experience = $data['experience'];
            $category->number = $data['number'];
            $category->description = $data['description'];
            $category->address = $data['address'];
            $category->phone = $data['phone'];
            $category->email = $data['email'];
            $category->location = $data['location'];
            if($request->hasfile('image')){
                echo $img_tmp =$request->file('image');
               if($img_tmp->isValid()){
               //image path code
               $extension = $request->file('image')->getClientOriginalExtension();
               $filename = rand(111,99999).'.'.$extension;
               $img_path = 'uploads/about/'.$filename;
               //image resize
               Image::make($img_tmp)->resize(426,574)->save($img_path);
               $category->image = $filename;
           }
           }
            $category->save();
            return redirect('/admin/view-about')->with('flash_message_success','About Added Successfully!!');
        }
        return view('admin.about.create');
    }
    public function viewCategories(){
        $categories = About::get();
        return view('admin.about.view')->with(compact('categories'));
    }
    public function editCategory(Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasfile('image')){
                echo $img_tmp =$request->file('image');
                if($img_tmp->isValid()){
                $extension = $img_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'uploads/about/'.$filename;
                Image::make($img_tmp)->resize(426,574)->save($img_path);
            }
            }else{
                $filename = $data['current_image'];
            }
            if(empty($data['product_description'])){
                $data['product_description'] = '';
            }
            About::where(['id'=>$id])->update(['heading'=>$data['heading'],
            'experience'=>$data['experience'],'address'=>$data['address'],'phone'=>$data['phone'],'email'=>$data['email'],
            'location'=>$data['location'],'number'=>$data['number'],'description'=>$data['description'],'image'=>$filename]);
            return redirect('/admin/view-about')->with('flash_message_success','About Updated Successfully!!!');
        }
        $categoryDetails = About::where(['id'=>$id])->first();
        return view('admin.about.edit')->with(compact('categoryDetails'));
    }
    public function deleteCategory($id=null){
        $productImage = About::where(['id'=>$id])->first();
        $image_path = 'uploads/about/';
        if(file_exists($image_path.$productImage->image)){
            unlink($image_path.$productImage->image);
        }
        About::where(['id'=>$id])->delete();
        Alert::Success('Deleted','Success Message');
        return redirect()->back()->with('flash_message_error','About Deleted');
    }
    public function updateStatus(Request $request,$id=null){
        $data = $request->all();
        About::where('id',$data['id'])->update(['status'=>$data['status']]);

    }
}
