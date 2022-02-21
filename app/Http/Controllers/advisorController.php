<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use Illuminate\Http\Request;
use Image;

class advisorController extends Controller
{
    //
    public function index(){
        $advisors=Advisor::get();
        return view('admin.advisor.index',compact('advisors'));
    }

    public function addAdvisor(){
        return view('admin.advisor.addAdvisor');
    }

    public function storeAdvisor(Request $request){
        $advisor=new Advisor();
        $this->validate($request,[
            'image'=>'required',
            'content'=>'required',
            'name'=>'required'
        ]);

        $image=$request->image;
        $advisor->content=$request->content;
        $advisor->name=$request->name;
        if($image!==null){
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $full_name = 'public/media/advisor/' . $image_name;
            Image::make($image)->resize(300,300)->save($full_name);

            $advisor->image = $full_name;
        }
        $advisor->save();

        return redirect(route('advisor'))->with('message',"Advisor Added");
    }

    public function updateAdvisor(Request $request,$id){
        $advisor=Advisor::find($id);
        $this->validate($request,[
            'content'=>'required',
            'name'=>'required'
        ]);

        $image=$request->image;
        $advisor->content=$request->content;
        $advisor->name=$request->name;
        if($image!==null){
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $full_name = 'public/media/advisor/' . $image_name;
            Image::make($image)->resize(300,300)->save($full_name);

            $advisor->image = $full_name;
        }
        $advisor->save();

        return redirect(route('advisor'))->with('message',"Advisor Updated");
    }

    public function deleteAdvisor($id){
        Advisor::find($id)->delete();
        return redirect(route('advisor'))->with('message',"Advisor Deleted");
    }

    public function editAdvisor($id)
    {
        $advisor = Advisor::find($id);
        return view('admin.advisor.editAdvisor', compact('advisor'));
    }


}
