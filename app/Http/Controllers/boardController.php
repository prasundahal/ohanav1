<?php

namespace App\Http\Controllers;

use App\Models\boardOfDirector;
use Illuminate\Http\Request;
use Image;

class boardController extends Controller
{
    //
    public function index(){
        $boardOfDirectors=boardOfDirector::all();
        return view('admin.board.index',compact('boardOfDirectors'));
    }
    public function addBoardOfDirector(){
        return view('admin.board.addBoardOfDirector');
    }

    public function storeBoardOfDirector(Request $request){
        $board=new boardOfDirector();
        $this->validate($request,[
            'image'=>'required',
            'about'=>'required',
            'name'=>'required',
            'designation'=>'required'
        ]);

        $image=$request->image;
        $board->about=$request->about;
        $board->name=$request->name;
        $board->designation=$request->designation;
        if($image!==null){
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $full_name = 'public/media/board/' . $image_name;
            Image::make($image)->resize(400,500)->save($full_name);

            $board->image = $full_name;
        }
        $board->save();

        return redirect(route('boardOfDirectors'))->with('message',"BoardOfDirector Added");
    }

    public function updateBoardOfDirector(Request $request,$id){
        $board=BoardOfDirector::find($id);
        $this->validate($request,[
            'about'=>'required',
            'name'=>'required',
            'designation'=>'required'
        ]);

        $image=$request->image;
        $board->about=$request->about;
        $board->name=$request->name;
        $board->designation=$request->designation;
        if($image!==null){
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $full_name = 'public/media/board/' . $image_name;
            Image::make($image)->resize(400,500)->save($full_name);

            $board->image = $full_name;
        }
        $board->save();

        return redirect(route('boardOfDirectors'))->with('message',"BoardOfDirector Updated");
    }

    public function deleteBoardOfDirector($id){
        BoardOfDirector::find($id)->delete();
        return redirect(route('boardOfDirectors'))->with('message',"BoardOfDirector Deleted");
    }

    public function editBoardOfDirector($id)
    {
        $boardOfDirector = BoardOfDirector::find($id);
        return view('admin.board.editBoardOfDirector', compact('boardOfDirector'));
    }


}
