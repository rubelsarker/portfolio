<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $skills = Skill::all();
        return view('admin.skill.index',compact('skills'));
    }

    public function create()
    {
        return view('admin.skill.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'label' => 'required|max:30|unique:skills',
            'value' => 'required|numeric',
        ]);
        $skill = new Skill();
        $skill->label = $request->label;
        $skill->value = $request->value;
        if(isset($request->status)){
            $skill->status = 1;
        }else{
            $skill->status = 0;
        }
        $skill->save();
        $notification=array(
            'messege'=>'Skill Successfully Created.',
            'alert-type'=>'success'
        );
        return redirect()->bacK()->with($notification);
    }

    public function show($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skill.show',compact('skill'));
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skill.edit',compact('skill'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'label' => 'required|max:30|unique:skills,label,'.$id,
            'value' => 'required|numeric',
        ]);
        $skill = Skill::findOrFail($id);
        $skill->label = $request->label;
        $skill->value = $request->value;
        if(isset($request->status)){
            $skill->status = 1;
        }else{
            $skill->status = 0;
        }
        $skill->save();
        $notification=array(
            'messege'=>'Skill Successfully Updated.',
            'alert-type'=>'success'
        );
        return redirect()->bacK()->with($notification);
    }


    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();
        $notification=array(
            'messege'=>'Skill Successfully Deleted ',
            'alert-type'=>'success'
        );
        return redirect()->route('admin.skill.index')->with($notification);
    }
    public function inactiveSkill($id){
        $inactive = Skill::where('id',$id)->update(['status' => 0]);
        if ($inactive) {
            $notification=array(
                'messege'=>'Skill Successfully inactivated ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function activeSkill($id){
        $active = Skill::where('id',$id)->update(['status' => 1]);
        if ($active) {
            $notification=array(
                'messege'=>'Skill Successfully Activated ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
