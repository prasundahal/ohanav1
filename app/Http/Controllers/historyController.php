<?php

namespace App\Http\Controllers;

use App\Models\history;
use Illuminate\Http\Request;

class historyController extends Controller
{
    //
    public function index(){
        $histories=history::all();
        return view('admin.history.index',compact('histories'));
    }
    public function addHistory(){
        return view('admin.history.addHistory');
    }

    public function storeHistory(Request $request){
        $history=new history();
        $this->validate($request,[
            'year'=>'required',
            'title'=>'required',
            'content'=>'required',
            'subtitle'=>'required',
            'subcontent'=>'required',
        ]);
        $history->year=$request->year;
        $history->content=$request->content;
        $history->subcontent=$request->subcontent;
        $history->title=$request->title;
        $history->subtitle=$request->subtitle;
        $history->save();
        return redirect(route('companyHistory'))->with('message',"History Added");
    }

    public function updateHistory(Request $request,$id){
        $history=history::find($id);
        $this->validate($request,[
            'year'=>'required',
            'title'=>'required',
            'content'=>'required',
            'subtitle'=>'required',
            'subcontent'=>'required',
        ]);
        $history->year=$request->year;
        $history->content=$request->content;
        $history->subcontent=$request->subcontent;
        $history->title=$request->title;
        $history->subtitle=$request->subtitle;
        $history->save();
        return redirect(route('companyHistory'))->with('message',"History Updated");
    }

    public function deleteHistory($id){
        history::find($id)->delete();
        return redirect(route('companyHistory'))->with('message',"History Deleted");
    }

    public function editHistory($id)
    {
        $history = history::find($id);
        return view('admin.history.editHistory', compact('history'));
    }



}
