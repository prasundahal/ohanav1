<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\File;

class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=member::all();
        return view('admin.team.viewteams',compact('teams'));
    }


    public function editteam($id){
        $member=member::find($id);
        return view('admin.team.editteam',compact('member'));
    }

    public function updateteam(Request $request,$id){
        $this->validate($request,[
            'memberName'=>'required',
            'memberDescription'=>'required',
            'memberPost'=>'required'
        ]);
        $member=member::find($id);
        $image=$request->memberImage;
        if($image!==null){
            if($member->memberImage!= null){
                $file_path = public_path('media/team/'.$member->memberImage);
                if(file_exists($file_path)){
                    File::delete($file_path);
                }
            }
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            // $full_name = 'public/media/team/' . $image_name;
            // Image::make($image)->resize(270,333)->save($full_name);
            $image->move(public_path('media/team/'),$image_name);
            $member->memberImage = $image_name;
        }
        $member->memberName=$request->memberName;
        $member->memberDescription=$request->memberDescription;
        $member->memberPost=$request->memberPost;
        $member->save();
        return redirect(route('viewteams'))->with('message','Team Member Info Updated');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'memberName'=>'required',
            'memberDescription'=>'required',
            'memberPost'=>'required',
            'memberImage'=>'required'
        ]);
        $member=new member();
        $image=$request->memberImage;
        if($image!==null){

            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            // $full_name = 'public/media/team/' . $image_name;
            // Image::make($image)->resize(270,333)->save($full_name);

            $member->memberImage = $full_name;
        }
        $member->memberName=$request->memberName;
        $member->memberDescription=$request->memberDescription;
        $member->memberPost=$request->memberPost;
        $member->save();
        return redirect(route('viewteams'))->with('message','Team Member Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addteam(){
        return view('admin.team.addteam');
    }

    public function deleteteam($id){
        member::find($id)->delete();
        return redirect(route('viewteams'))->with('message','Team Member Deleted Successfully');
    }

}
