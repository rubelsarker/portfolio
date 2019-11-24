<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class AboutSectionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function getAbout(){
        $about = About::first();
        return view('admin.about',compact('about'));
    }
    public function updateAbout(Request $request){
        $id=$request->id;
        $request->validate([
            'about_image' => 'mimes:jpeg,jpg,png',
        ]);
        $about = About::findOrFail($id);

        $image = $request->file('about_image');
        if(isset($image)){
            $imageName =uniqid().'.'.$image->getClientOriginalExtension();
            $upload_path='public/upload/about';
            $image_url=$upload_path.'/'.$imageName;
            if (! File::exists($upload_path)) {
                File::makeDirectory($upload_path, $mode = 0777, true, true);
            }
            if(file_exists($about->about_image)){
                unlink($about->about_image);
            }
            $img = Image::make($image->getRealPath());
            $img->resize(500, 500)->save($upload_path.'/'.$imageName);

        }else{
            $image_url = $about->about_image;
        }

        $cv = $request->file('cv');
        if(isset($cv)){
            $cvName ='Rubel-Mia'.'.'.$cv->getClientOriginalExtension();
            $upload_path='public/upload/about';
            $cv_url=$upload_path.'/'.$cvName;
            if (! File::exists($upload_path)) {
                File::makeDirectory($upload_path, $mode = 0777, true, true);
            }
            if(file_exists($about->cv)){
                unlink($about->cv);
            }
            $cv->move($upload_path,$cvName);


        }else{
            $cv_url = $about->cv;
        }
        $about->about_myself = $request->about_myself;
        $about->about_image = $image_url;
        $about->cv = $cv_url;
        $about->save();
        $notification=array(
            'messege'=>'About Section Successfully Update.',
            'alert-type'=>'success'
        );
        return redirect()->bacK()->with($notification);
    }
}
