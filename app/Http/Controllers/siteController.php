<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use App\Models\blog;
use App\Models\blogcategory;
use App\Models\boardOfDirector;
use App\Models\history;
use App\Models\member;
use App\Models\objective;
use App\Models\partner;
use App\Models\portfolio;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\slider;
use App\Models\Suscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class siteController extends Controller
{
    public function index(){
        $members=member::all();
        $sliders=slider::all();
        $projects=Project::all();
        $settings=Setting::first();
        $advisors=Advisor::all();
        $services=Service::all();
        return view('index',compact('members','sliders','projects','settings','advisors','services'));
    }
    public function suscribe(Request $request)
    {

        $this->validate($request,[

            'email'=>'required'

        ]);
        $message=new Suscribe();


        $message->email=$request->email;

        $message->save();
        return redirect()->back()->with('message','Message Sent Successfully');
    }
    public function termsandcondition(){
        $faqs=Objective::all();
        $services=Service::all();
        return view('termsandcondition',compact('faqs','services'));
    }

    public function projectdetail($id){
        $project=Project::find($id);
        return view('project-detail',compact('project'));
    }

    public function contact(){
        $settings=Setting::first();
        return view('contact',compact('settings'));
    }

    public function error(){
        return view('error');
    }

    //FrontEnd about page
    public function about(){
        $settings=Setting::first();
        $boardOfDirectors=boardOfDirector::all();
        return view('about',compact('settings','boardOfDirectors'));
    }

    public function convert(){
        return view('convert');
    }

    public function project(){
        return view('project');
    }

    public function team(){
        return view('team');
    }

    public function service(){
        return view('services');
    }

    public function privacy(){
        $projectTypes = Project::select(DB::raw('sum(projectType) as total_quantity'),'projectType')->groupBy('projectType')->get();
        $portfolios=portfolio::all();
        return view('privacy',compact('projectTypes','portfolios'));
    }

    public function readblog($id){
        $blog=blog::find($id);
        $blogcategories=blogcategory::all();
        return view('readblog',compact('blog','blogcategories'));
    }

    public function blog(){
        $blogs=blog::paginate(3);
        $blogcategories=blogcategory::all();
        return view('blogs',compact('blogs','blogcategories'));
    }

    public function blogcat($id){
        $blogs=DB::table('blogs')
            ->where('category_id', '=', $id)
            ->paginate(3);
        $blogcategories=blogcategory::all();
        return view('blogs',compact('blogs','blogcategories'));
    }

    public function history(){
        $histories=history::all();
        return view('history',compact('histories'));
    }

    public function career(){
        return view('career');
    }

    public function partnership(){
        $partners=partner::all();
        return view('partnership',compact('partners'));
    }

    public function viewpartner($id){
        $partner=partner::find($id);
        return view('viewpartner',compact('partner'));
    }

    public function leadership(){
        $bods=boardOfDirector::all();
        return view('leadership',compact('bods'));
    }

    public function faq(){
        return view('faq');
    }


    public function register()
    {
        // Only authenticated users may enter...
        return view('register');
    }

}
