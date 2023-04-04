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
            'client' => 'required',
            // 'surfacearea' => 'required',
            'location' => 'required',
            'value' => 'required',
            'architech' => 'required',
            'ih' => 'required',
            'ihc' => 'required',
            'main_image' => 'required'
        ]);
        $project = new project();
        $main_image = $request->main_image;
        $img1 = $request->p1;
        $img2 = $request->p2;
        $img3 = $request->p3;
        $img4 = $request->p4;

        if ($main_image !== null) {
            $image_name = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            // $full_name = 'public/media/project/' . $image_name;
            // Image::make($main_image)->resize(850, 500)->save($full_name);
            $main_image->move(public_path('media/project/'),$image_name);
            $project->imgmain = $image_name;
        }
        if ($img1 !== null) {
            $img1 = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            $full_name = 'public/media/project/' . $img1;
            Image::make($img1)->resize(850, 500)->save($full_name);
            $project->innerimg1 = $full_name;
        }
        if ($img2 !== null) {
            $img1 = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            $full_name = 'public/media/project/' . $img2;
            Image::make($img2)->resize(850, 500)->save($full_name);
            $project->innerimg2 = $full_name;
        }
        if ($img3 !== null) {
            $img3 = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            $full_name = 'public/media/project/' . $img3;
            Image::make($img3)->resize(850, 500)->save($full_name);
            $project->innerimg3 = $full_name;
        }
        if ($img4 !== null) {
            $img4 = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            $full_name = 'public/media/project/' . $img4;
            Image::make($img4)->resize(850, 500)->save($full_name);
            $project->innerimg4 = $full_name;
        }

        $project->projectName = $request->project_name;
        $project->yearcompleted = $request->yearcompleted;
        $project->subName = $request->sub_name;
        $project->client = $request->client;
        $project->location = $request->location;
        // $project->surfaceArea = $request->surfacearea;
        $project->value = $request->value;
        $project->tag = $request->tag;
        $project->architech = $request->architech;
        $project->innerHeading = $request->ih;
        $project->innerHeadingContent = $request->ihc;

        $project->save();
        return redirect(route('viewproject'))->with('message', 'Project Added Successfully');
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
        return redirect()->back()->with('message', "Project Deleted Successfully");
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
            'client' => 'required',
            // 'surfacearea' => 'required',
            'location' => 'required',
            'value' => 'required',
            'architech' => 'required',
            'ih' => 'required',
            'ihc' => 'required'
        ]);
        $project = project::find($id);
        $main_image = $request->main_image;
        $img1 = $request->p1;
        $img2 = $request->p2;
        $img3 = $request->p3;
        $img4 = $request->p4;
        if ($main_image !== null) {
            $image_name = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            $full_name = 'public/media/project/' . $image_name;
            Image::make($main_image)->resize(850, 500)->save($full_name);
            $project->imgmain = $full_name;
        }
        if ($img1 !== null) {
            $img1 = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            $full_name = 'public/media/project/' . $img1;
            Image::make($img1)->resize(850, 500)->save($full_name);
            $project->innerimg1 = $full_name;
        }
        if ($img2 !== null) {
            $img1 = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            $full_name = 'public/media/project/' . $img2;
            Image::make($img2)->resize(850, 500)->save($full_name);
            $project->innerimg2 = $full_name;
        }
        if ($img3 !== null) {
            $img3 = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            $full_name = 'public/media/project/' . $img3;
            Image::make($img3)->resize(850, 500)->save($full_name);
            $project->innerimg3 = $full_name;
        }
        if ($img4 !== null) {
            $img4 = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            $full_name = 'public/media/project/' . $img4;
            Image::make($img4)->resize(850, 500)->save($full_name);
            $project->innerimg4 = $full_name;
        }
        $project->projectName = $request->project_name;
        $project->subName = $request->sub_name;
        $project->client = $request->client;
        $project->location = $request->location;
        // $project->surfaceArea = $request->surfacearea;
        $project->value = $request->value;
        $project->tag = $request->tag;
        $project->architech = $request->architech;
        $project->innerHeading = $request->ih;
        $project->innerHeadingContent = $request->ihc;
        $project->yearcompleted = $request->yearcompleted;

        $project->save();
        return redirect(route('viewproject'))->with('message', 'Project Updated Successfully');
    }
}
