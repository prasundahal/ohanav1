<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages=message::all();
        return view('admin.message.viewmessages',compact('messages'));
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
            'name'=>'required',
            'subject'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);
        $message=new message();
        if($request->hasFile('file')){
            $filename=$request->file->getClientOriginalName();
            $request->file->storeAs('files',$filename);
            $message->file=$filename;
        }
        $message->name=$request->name;
        $message->subject=$request->subject;
        $message->email=$request->email;
        $message->message=$request->message;
        $message->save();
        return redirect()->back()->with('message','message Sent Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function deletemessage($id){
        message::find($id)->delete();
        return redirect(route('viewmessages'))->with('message','Message Deleted Successfully');
    }

    public function viewamessage($id){
        $message=message::find($id);
        return view('admin.message.viewamessage',compact('message'));
    }
}
