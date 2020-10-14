<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Partner;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
class ClientController extends Controller
{

    public function addCategory (Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $category = new Client;
            $category->name = $data['name'];
            $category->designation = $data['designation'];
            $category->address = $data['address'];
            $category->description = $data['category_description'];
            if($request->hasfile('image')){
                echo $img_tmp =$request->file('image');
               if($img_tmp->isValid()){
               //image path code
               $extension = $request->file('image')->getClientOriginalExtension();
               $filename = rand(111,99999).'.'.$extension;
               $img_path = 'uploads/client/'.$filename;
               //image resize
               Image::make($img_tmp)->resize(92,92)->save($img_path);
               $category->image = $filename;
           }
           }
            $category->save();
            return redirect('/admin/view-client')->with('flash_message_success','Client Added Successfully!!');
        }
        return view('admin.client.create');
    }
    public function viewCategories(){
        $categories = Client::get();
        return view('admin.client.view')->with(compact('categories'));
    }
    public function editCategory(Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasfile('image')){
                echo $img_tmp =$request->file('image');
                if($img_tmp->isValid()){

                //image path code
                $extension = $img_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'uploads/client/'.$filename;

                //image resize
                Image::make($img_tmp)->resize(92,92)->save($img_path);

            }
            }else{
                $filename = $data['current_image'];
            }

            Client::where(['id'=>$id])->update(['name'=>$data['name'],'designation'=>$data['designation'],
            'address'=>$data['address'],'description'=>$data['description']
            ,'image'=>$filename]);
            return redirect('/admin/view-client')->with('flash_message_success','Client Updated Successfully!!!');
        }
        $categoryDetails = Client::where(['id'=>$id])->first();
        return view('admin.client.edit')->with(compact('categoryDetails'));
    }
    public function deleteCategory($id=null){
        $productImage = Client::where(['id'=>$id])->first();
        $image_path = 'uploads/client/';
        if(file_exists($image_path.$productImage->image)){
            unlink($image_path.$productImage->image);
        }
        Client::where(['id'=>$id])->delete();
        Alert::Success('Deleted','Success Message');
        return redirect()->back()->with('flash_message_error','Client Deleted');
    }
    public function updateStatus(Request $request,$id=null){
        $data = $request->all();
        Client::where('id',$data['id'])->update(['status'=>$data['status']]);

    }
    public function addImages(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            if($request->hasfile('image')){
                $files = $request->file('image');
                foreach($files as $file){
                echo $img_tmp =$file;
                    $image = new Partner;
                    $image->name = $data['name'];
                    $extension = $file->getClientOriginalExtension();
                    $filename = rand(111,9999).'.'.$extension;
                    $image_path = 'uploads/partner/'.$filename;
                    // Image::make($file)->save($image_path);
                    Image::make($img_tmp)->save($image_path);
                    $image->image = $filename;
                    $image->save();

                }
            }
            return redirect('/admin/add-partner-images')->with('flash_message_success','Image has been updated');
        }
        $productImages = Partner::orderBy('id','desc')->get();
        return view('admin.partner.view')->with(compact('productImages'));
    }
    public function deleteAltImage($id=null){
        $productImage = Partner::where(['id'=>$id])->first();

        $image_path = 'uploads/partner/';
        if(file_exists($image_path.$productImage->image)){
            unlink($image_path.$productImage->image);
        }
        Partner::where(['id'=>$id])->delete();
        Alert::success('Deleted','Success Message');
        return redirect()->back()->with('flash_message_error','Image has been Deleted');
    }
}
