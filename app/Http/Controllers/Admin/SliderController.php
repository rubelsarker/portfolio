<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'slider_title' => 'required|max:50',
            'slider_description' => 'max:50',
            'slider_image' => 'required|mimes:jpeg,jpg,png',
            ]);
        $slider = new Slider();
        $image = $request->file('slider_image');
        if(isset($image)){
            $imageName =uniqid().'.'.$image->getClientOriginalExtension();
            $upload_path='public/upload/slider';
            $image_url=$upload_path.'/'.$imageName;
            $img = Image::make($image->getRealPath());
            $img->resize(1200, 800)->save($upload_path.'/'.$imageName);

        }else{
            $image_url = "default.png";
        }
        $slider->slider_title = $request->slider_title;
        $slider->slider_description = $request->slider_description;
        $slider->slider_image = $image_url;
        if(isset($request->status)){
            $slider->status = 1;
        }else{
            $slider->status = 0;
        }
        $slider->save();
        $notification=array(
            'messege'=>'Slider Successfully Added.',
            'alert-type'=>'success'
        );
        return redirect()->bacK()->with($notification);
    }

    public function show($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.show',compact('slider'));
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit',compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'slider_title' => 'required|max:50',
            'slider_description' => 'max:50',
        ]);
        $slider = Slider::findOrFail($id);
        $image = $request->file('slider_image');
        if(isset($image)){
            $imageName =uniqid().'.'.$image->getClientOriginalExtension();
            $upload_path='public/upload/slider';
            $image_url=$upload_path.'/'.$imageName;
            if(file_exists($slider->slider_image)){
                unlink($slider->slider_image);
            }
            $img = Image::make($image->getRealPath());
            $img->resize(1200, 800)->save($upload_path.'/'.$imageName);


        }else{
            $image_url = $slider->slider_image;
        }
        $slider->slider_title = $request->slider_title;
        $slider->slider_description = $request->slider_description;
        $slider->slider_image = $image_url;
        if(isset($request->status)){
            $slider->status = 1;
        }else{
            $slider->status = 0;
        }
        $slider->save();
        $notification=array(
            'messege'=>'Slider Successfully Update.',
            'alert-type'=>'success'
        );
        return redirect()->bacK()->with($notification);
    }


    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        if(file_exists($slider->slider_image)){
            unlink($slider->slider_image);
        }
        $slider->delete();
        $notification=array(
            'messege'=>'Slider Successfully Deleted ',
            'alert-type'=>'success'
        );
        return redirect()->route('admin.slider.index')->with($notification);
    }

    public function inactiveSlider($id){
        $inactive = Slider::where('id',$id)->update(['status' => 0]);
        if ($inactive) {
            $notification=array(
                'messege'=>'Slider Successfully inactivated ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function activeSlider($id){
        $active = Slider::where('id',$id)->update(['status' => 1]);
        if ($active) {
            $notification=array(
                'messege'=>'Slider Successfully Activated ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
