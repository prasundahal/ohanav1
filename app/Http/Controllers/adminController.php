<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\member;
use App\Models\partner;
use App\Models\project;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Suscribe;
use Image;

class adminController extends Controller
{

    public function suscriveview(){

        $messages=Suscribe::paginate(5);
        return view('admin.suscribe.index',compact('messages'));

    }

    //About Page
    public function getAbout()
    {
        $settings = Setting::first();
        return view('admin.about.index', compact('settings'));
    }

    public function editAbout()
    {
        $settings = Setting::first();
        return view('admin.about.editAbout', compact('settings'));
    }

    public function updateAbout(Request $request)
    {
        $settings = Setting::find(1);
        $this->validate($request, [
            'about' => 'required',
            'company_vision' => 'required',
            'company_mission' => 'required',
        ]);


        if ($request->company_image != '') {
            $companyImage = $request->company_image;
            $image_name = hexdec(uniqid()) . '.' . $companyImage->getClientOriginalExtension();
            $full_name = 'public/media/about/' . $image_name;
            Image::make($companyImage)->resize(895, 511)->save($full_name);

            $settings->company_image = $full_name;
        }
        $settings->about = $request->about;
        $settings->company_vision = $request->company_vision;
        $settings->company_mission = $request->company_mission;

        $settings->save();
        return redirect(route('adminAbout'))->with('message', 'About updated successfully');
    }


    //Settings Page
    public function getSettings()
    {
        $settings = Setting::first();
        return view('admin.settings.index', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $settings = Setting::find(1);
        $this->validate($request, [
            'company_name' => 'required',
            'company_location' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        $settings->company_name = $request->company_name;
        $settings->company_location = $request->company_location;
        $settings->email = $request->email;
        $settings->phone_number = $request->phone_number;
        $settings->architect = $request->architect;
        $settings->types = $request->types;
        $settings->client = $request->client;
        $settings->years = $request->years;
        $settings->facebook = $request->facebook;
        $settings->instagram = $request->instagram;
        $settings->twitter = $request->twitter;
        $settings->linkedin = $request->linkedin;
        $settings->youtube = $request->youtube;
        $settings->meta_name = $request->meta_name;
        $settings->meta_description = $request->meta_description;
        $settings->meta_content = $request->meta_content;


        $settings->save();
        return redirect(route('adminSettings'))->with('message', 'Settings updated successfully');
    }


    //Admin Dashboard
    public function index()
    {
        $count = [
            'projects' => project::count(),
            'blogs' => blog::count(),
            'members' => member::count(),
            'partners' => partner::count()
        ];
        return view('admin.index', compact('count'));
    }

    public function login()
    {
        return view('admin.login');
    }

    public function storeadmin(Request $request)
    {
        $user = new User();
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect(route('viewadmin'))->with('message', 'Admin Added Successfully');
    }

    public function addadmin()
    {
        return view('admin.user.addadmin');
    }

    public function deleteadmin($id)
    {
        $user = User::find($id);
        if (!$user->role) {
            User::find($id)->delete();
            return redirect(route('viewadmin'))->with('message', 'Deleted Successfully');
        }
        return redirect(route('viewadmin'))->with('message', 'Super Admin cannot be Deleted');
    }


    public function viewusers()
    {
        return view('admin.user.viewusers');
    }


    public function viewadmin()
    {
        $users = User::all();
        return view('admin.user.viewadmins', compact('users'));
    }
}
