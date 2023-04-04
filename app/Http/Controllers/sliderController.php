<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\File;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = slider::all();
        return view('admin.slider.viewsliders', compact('sliders'));
    }

    public function addslider()
    {
        return view('admin.slider.addsliders');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new slider();
        $this->validate($request, [
            'sliderImage' => 'required|mimes:png,jpg,jpeg',
            'title' => 'required',
            'subtitle1' => 'required',
            'subtitle2' => 'required',
            'content' => 'required'
        ]);
        $sliderImage = $request->sliderImage;
        if($sliderImage != null){
            $image_name = hexdec(uniqid()) . '.' . $sliderImage->getClientOriginalExtension();
            // $full_name = 'public/media/slider/' . $image_name;
            $sliderImage->move(public_path('media/slider/'),$image_name);
            // Image::make($sliderImage)->resize(1920, 720)->save($full_name);
            $slider->image = $image_name;
        }

        $slider->title = $request->title;
        $slider->subtitle1 = $request->subtitle1;
        $slider->subtitle2 = $request->subtitle2;
        $slider->content = $request->content;
        $slider->save();
        return redirect(route('slider'))->with('message', 'Slider Added Successfully');
    }

    public function updateslider(Request $request, $id)
    {
        $slider = slider::find($id);
        $this->validate($request, [
            'title' => 'required',
            'subtitle1' => 'required',
            'subtitle2' => 'required',
            'content' => 'required'
        ]);


        if ($request->sliderImage != null) {
            if($slider->image != null){
                $file_path = public_path('media/slider'.$slider->image);
                if(file_exists($file_path)){
                    File::delete($file_path);
                }
            }
            $sliderImage = $request->sliderImage;
            $image_name = hexdec(uniqid()) . '.' . $sliderImage->getClientOriginalExtension();
            // $full_name = 'public/media/slider/' . $image_name;
            $sliderImage->move(public_path('media/slider/'),$image_name);
            // Image::make($sliderImage)->resize(1920, 720)->save($full_name);

            $slider->image = $image_name;
        }
        $slider->title = $request->title;
        $slider->subtitle1 = $request->subtitle1;
        $slider->subtitle2 = $request->subtitle2;
        $slider->content = $request->content;
        $slider->save();
        return redirect(route('slider'))->with('message', 'Slider updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteslider($id)
    {
        $slider = slider::find($id);
        if($slider->image != null){
            $file_path = public_path('media/slider'.$slider->image);
            if(file_exists($file_path)){
                File::delete($file_path);
            }
        }

        return redirect(route('slider'))->with('message', "Slider Deleted Successfully");
    }

    public function editslider($id)
    {
        $slider = slider::find($id);
        return view('admin.slider.editslider', compact('slider'));
    }
}
