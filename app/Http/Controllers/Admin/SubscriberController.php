<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $subscribers= Subscriber::latest()->get();
        return view('admin.subscriber',compact('subscribers'));
    }
    public function destroy($id){
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();
        $notification=array(
            'messege'=>'Subsceiber Successfully Deleted ',
            'alert-type'=>'success'
        );
        return redirect()->route('admin.subscriber.index')->with($notification);
    }
}
