<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeBanner;
use Illuminate\Validation\Rules\File;

class HomeBannerController extends Controller
{
    function index(){
        $home_banner = HomeBanner::first();
        return view('admin.homebanner.index',compact('home_banner'));
    }
    function update(Request $request){
        $request->validate([
            'title'=>'required|max:255',
            'subtitle'=>'required|max:255',
            'image'=>'mimes:png,jpg,jpeg',
        ]);
        $home_banner = HomeBanner::first();
        $home_banner->title = $request->title;
        $home_banner->subtitle = $request->subtitle;
        if($request->hasFile('image')){
            if($home_banner->image != null){
                if(file_exists(public_path('uploads/'.$home_banner->image))){
                    File::delete(public_path('uploads/'.$home_banner->image));
                }
            }
            $image = $request->file('image');
            $image_name = time().'.'.$image->extension();
            $image->move(public_path('uploads/'),$image_name);
            $home_banner->image = $image_name;
        }
        $home_banner->save();
        return view('admin.homebanner.index')->with('message','Home banner update successfully');

    }
}
