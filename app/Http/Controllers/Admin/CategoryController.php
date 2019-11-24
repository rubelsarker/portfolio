<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:50|unique:categories',
        ]);
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_slug = Str::slug($request->category_name,'-');
        if(isset($request->category_status)){
            $category->category_status = 1;
        }else{
            $category->category_status = 0;
        }
        $category->save();
        $notification=array(
            'messege'=>'Category Successfully Created.',
            'alert-type'=>'success'
        );
        return redirect()->bacK()->with($notification);
    }


    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.show',compact('category'));
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|max:50|unique:categories,category_name,'.$id,
        ]);
        $category = Category::findOrFail($id);
        $category->category_name = $request->category_name;
        $category->category_slug = Str::slug($request->category_name,'-');
        if(isset($request->category_status)){
            $category->category_status = 1;
        }else{
            $category->category_status = 0;
        }
        $category->save();
        $notification=array(
            'messege'=>'Category Successfully Updated.',
            'alert-type'=>'success'
        );
        return redirect()->bacK()->with($notification);
    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        foreach ($category->projects as $project){
            if(file_exists($project->image)){
                    unlink($project->image);
             }
        }
        $category->projects()->delete();
        $category->delete();
        $notification=array(
            'messege'=>'Category Successfully Deleted ',
            'alert-type'=>'success'
        );
        return redirect()->route('admin.category.index')->with($notification);
    }

    public function inactiveCategory($id){
        $inactive = Category::where('id',$id)->update(['category_status' => 0]);
        if ($inactive) {
            $notification=array(
                'messege'=>'Category Successfully inactivated ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function activeCategory($id){
        $active = Category::where('id',$id)->update(['category_status' => 1]);
        if ($active) {
            $notification=array(
                'messege'=>'Category Successfully Activated ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
