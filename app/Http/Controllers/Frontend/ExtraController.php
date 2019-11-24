<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Model\About;
use App\Model\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class ExtraController extends Controller
{
    public function cvDownload(){
        $about = About::first();
        $file= $about->cv;
        $headers = array(
            'Content-Type: application/pdf',
        );
       return Response::download($file, 'RubelMia.pdf', $headers);
    }

    public function subscribe(Request $request){
       $validate = $request->validate([
            'email' => 'required|email|unique:subscribers',
        ]);
       if($validate) {
           $subscriber = new Subscriber();
           $subscriber->email = $request->email;
           $subscriber->save();
           $notification = array(
               'messege' => 'You are Subscribed',
               'alert-type' => 'success'
           );
           return redirect()->bacK()->with($notification);
       } else{
           $notification=array(
               'messege'=>'You are Subscribed',
               'alert-type'=>'error'
           );
           return redirect()->bacK()->with($notification);
       }

    }

    public function contactForm(Request $request){
       $data =  $validate = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        Mail::to('info@rubelsarker.com')->send(new ContactFormMail($data));
        $notification=array(
            'messege'=>'Message Send Successfully',
            'alert-type'=>'success'
        );
        return redirect()->bacK()->with($notification);
    }
}
