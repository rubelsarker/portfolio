<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function getContact(){
        $contact = Contact::first();
        return view('admin.contact',compact('contact'));
    }

    public function updateContact(Request $request){
        $id=$request->id;
        $request->validate([
            'logo' => 'mimes:jpeg,jpg,png',
            'favicon' => 'mimes:jpeg,jpg,png',
        ]);
        $contact = Contact::findOrFail($id);

        $logo = $request->file('logo');
        if(isset($logo)){
            $logoName ='logo'.'.'.$logo->getClientOriginalExtension();
            $upload_path='public/upload/default';
            $logourl=$upload_path.'/'.$logoName;
            if (! File::exists($upload_path)) {
                File::makeDirectory($upload_path, $mode = 0777, true, true);
            }
            if(file_exists($contact->logo)){
                unlink($contact->logo);
            }
            $img = Image::make($logo->getRealPath());
            $img->resize(60, 60)->save($upload_path.'/'.$logoName);

        }else{
            $logourl = $contact->logo;
        }

        $favicon = $request->file('favicon');
        if(isset($favicon)){
            $favName ='favicon'.'.'.$favicon->getClientOriginalExtension();
            $upload_path='public/upload/default';
            $favurl=$upload_path.'/'.$favName;
            if (! File::exists($upload_path)) {
                File::makeDirectory($upload_path, $mode = 0777, true, true);
            }
            if(file_exists($contact->favicon)){
                unlink($contact->favicon);
            }
            $imgfav = Image::make($favicon->getRealPath());
            $imgfav->resize(50, 50)->save($upload_path.'/'.$favName);

        }else{
            $favurl = $contact->favicon;
        }
        $contact->logo = $logourl;
        $contact->favicon = $favurl;
        $contact->facebook = $request->facebook;
        $contact->github = $request->github;
        $contact->linkedin = $request->linkedin;
        $contact->gmail = $request->gmail;
        $contact->copyright = $request->copyright;
        $contact->phone = $request->phone;
        $contact->google_map = $request->google_map;
        $contact->address = $request->address;
        $contact->save();
        $notification=array(
            'messege'=>'Contact Successfully Update.',
            'alert-type'=>'success'
        );
        return redirect()->bacK()->with($notification);
    }
}
