<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::paginate(10);
        return view('admin.project.index',compact('projects'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.project.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200|min:10',
            'image' => 'required|mimes:jpeg,jpg,png',
            'category_id' => 'required',
        ]);
        $project = new Project();
        $image = $request->file('image');
        if(isset($image)){
            $imageName = uniqid().'.'.$image->getClientOriginalExtension();

            $upload_path='public/upload/project';
            $image_url=$upload_path.'/'.$imageName;
            if (! File::exists($upload_path)) {
                File::makeDirectory($upload_path, $mode = 0777, true, true);
            }
            $img = Image::make($image->getRealPath());
            $img->resize(550, 350)->save($upload_path.'/'.$imageName);

        }else{
            $image_url = "default.png";
        }
        $project->title = $request->title;
        $project->description = $request->description;
        $project->image = $image_url;
        $project->category_id = $request->category_id;
        $project->type = $request->type;
        $project->website_link = $request->website_link;
        $project->rating = $request->rating;
        $project->completed_date = $request->completed_date;
        if(isset($request->status)){
            $project->status = 1;
        }else{
            $project->status = 0;
        }
        $project->save();
        $notification=array(
            'messege'=>'Project Successfully Added.',
            'alert-type'=>'success'
        );
        return redirect()->bacK()->with($notification);
    }


    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.show',compact('project'));
    }


    public function edit($id)
    {
        $categories = Category::all();
        $project = Project::findOrFail($id);
        return view('admin.project.edit',compact('project','categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200|min:10',
            'category_id' => 'required',
        ]);
        $project = Project::findOrFail($id);
        $image = $request->file('image');
        if(isset($image)){
            $imageName = uniqid().'.'.$image->getClientOriginalExtension();
            $upload_path='public/upload/project';
            $image_url=$upload_path.'/'.$imageName;
            if (! File::exists($upload_path)) {
                File::makeDirectory($upload_path, $mode = 0777, true, true);
            }
            if(file_exists($project->image)){
                unlink($project->image);
            }
            $img = Image::make($image->getRealPath());
            $img->resize(550, 350)->save($upload_path.'/'.$imageName);

        }else{
            $image_url = $project->image;
        }
        $project->title = $request->title;
        $project->description = $request->description;
        $project->image = $image_url;
        $project->category_id = $request->category_id;
        $project->type = $request->type;
        $project->website_link = $request->website_link;
        $project->rating = $request->rating;
        $project->completed_date = $request->completed_date;
        if(isset($request->status)){
            $project->status = 1;
        }else{
            $project->status = 0;
        }
        $project->save();
        $notification=array(
            'messege'=>'Project Successfully Updated.',
            'alert-type'=>'success'
        );
        return redirect()->bacK()->with($notification);
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        if(file_exists($project->image)){
            unlink($project->image);
        }
        $project->delete();
        $notification=array(
            'messege'=>'Project Successfully Deleted ',
            'alert-type'=>'success'
        );
        return redirect()->route('admin.portfolio.index')->with($notification);
    }

    public function inactiveProject($id){
        $inactive = Project::where('id',$id)->update(['status' => 0]);
        if ($inactive) {
            $notification=array(
                'messege'=>'Project Successfully inactivated ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function activeProject($id){
        $active = Project::where('id',$id)->update(['status' => 1]);
        if ($active) {
            $notification=array(
                'messege'=>'Project Successfully Activated ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
