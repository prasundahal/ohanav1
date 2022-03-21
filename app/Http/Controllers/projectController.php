<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use Image;

class projectController extends Controller
{
    public function index()
    {
        $projects = project::all();
        return view('admin.project.viewprojects', compact('projects'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'project_name' => 'required',
            'sub_name' => 'required',

            'ih' => 'required',
            'ihc' => 'required',
            'main_image' => 'required'
        ]);
        $project = new project();
        $main_image = $request->main_image;


        if ($main_image !== null) {
            $image_name = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            $full_name = 'public/media/project/' . $image_name;
            Image::make($main_image)->resize(850, 500)->save($full_name);
            $project->imgmain = $full_name;
        }



        $project->projectName = $request->project_name;

        $project->subName = $request->sub_name;



        $project->innerHeading = $request->ih;
        $project->innerHeadingContent = $request->ihc;

        $project->save();
        return redirect(route('viewproject'))->with('message', 'Work Added Successfully');
    }

    public function addproject()
    {
        return view('admin.project.addprojects');
    }

    public function viewprojectid($id)
    {
        $project = project::find($id);
        return view('admin.project.viewprojectid', compact('project'));
    }

    public function deleteproject($id)
    {
        project::find($id)->delete();
        return redirect()->back()->with('message', "Work Deleted Successfully");
    }

    public function editproject($id)
    {
        $project = project::find($id);
        return view('admin.project.editproject', compact('project'));
    }

    public function updateproject(Request $request, $id)
    {
        $this->validate($request, [
            'project_name' => 'required',
            'sub_name' => 'required',
            'ih' => 'required',
            'ihc' => 'required'
        ]);
        $project = project::find($id);
        $main_image = $request->main_image;

        if ($main_image !== null) {
            $image_name = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            $full_name = 'public/media/project/' . $image_name;
            Image::make($main_image)->resize(850, 500)->save($full_name);
            $project->imgmain = $full_name;
        }




        $project->projectName = $request->project_name;
        $project->subName = $request->sub_name;

        $project->innerHeading = $request->ih;
        $project->innerHeadingContent = $request->ihc;


        $project->save();
        return redirect(route('viewproject'))->with('message', 'Work Updated Successfully');
    }
}
