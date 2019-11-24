<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //index page
    public function index(){
        return view('public.pages.index');
    }
    //about page
    public function about(){
        return view('public.pages.about');
    }
    //portfolio page
    public function portfolio(){
        return view('public.pages.portfolio');
    }
    //blog page
    public function blog(){
        return view('public.pages.blog');
    }
    //contact page
    public function contact(){
        return view('public.pages.contact');
    }
    //project details
    public function projectdetails($id){
        $id=base64_decode($id);
        $project  = Project::where('id',$id)->first();
        return view('public.pages.projectDetails',compact('project'));
    }
}
