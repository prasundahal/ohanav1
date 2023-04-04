<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurService;

class OurServiceController extends Controller
{
    function index(){
        $our_services = OurServices::get();
        return view('admin.ourservice.index',compact('our_services'));
    }
    function create(){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $our_service = new OurService();
        $our_service->title = $request->title;
        $our_service->description = $request->title;
        $our_service->icon = $request->icon;
        if($request->has('status')){
            $our_service->status = '1';
        }else{
            $our_service->status = '0';
        }
        $our_service->save();

        return redirect()->route('our-service.index')->with('message','New Service Added');
    }
    function edit($id){
        $our_service = OurService::findOrFail($id);
        return view('admin.ourservices.edit',compact('our_service'));
    }
    function update(Request $request, $id){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $our_service = OurService::findOrFail($id);
        $our_service->title = $request->title;
        $our_service->description = $request->title;
        $our_service->icon = $request->icon;
        if($request->has('status')){
            $our_service->status = '1';
        }else{
            $our_service->status = '0';
        }
        $our_service->save();
        return redirect()->route('our-service.index')->with('message','Service Updated');

    }
    function view($id){

    }
    function destroy($id){
        OurService::delete($id);
        return back()->with('message','Deleted Sussefully');
    }
}
