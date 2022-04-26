<?php

namespace App\Http\Controllers;

use App\Models\objective;
use App\Models\portfolio;
use Illuminate\Http\Request;

class portfolioController extends Controller
{
    //
    public function index()
    {
        $portfolios=portfolio::all();
        return view('admin.portfolio.index',compact('portfolios'));
    }

    public function addPortfolio(){
        return view('admin.portfolio.addPortfolio');
    }

    public function storePortfolio(Request $request){
        $portfolio=new portfolio();
        $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
        ]);

        $portfolio->content=$request->content;
        $portfolio->content2=$request->content2;
        $portfolio->title=$request->title;
        $portfolio->save();

        return redirect(route('managePortfolio'))->with('message',"Contact Added");
    }

    public function updatePortfolio(Request $request,$id){
        $portfolio=Portfolio::find($id);
        $this->validate($request,[
            'content'=>'required',
            'title'=>'required'
        ]);
        $portfolio->content=$request->content;
        $portfolio->content2=$request->content2;
        $portfolio->title=$request->title;
        $portfolio->save();
        return redirect(route('managePortfolio'))->with('message',"Contact Updated");
    }

    public function deletePortfolio($id){
        Portfolio::find($id)->delete();
        return redirect(route('managePortfolio'))->with('message',"Contact Deleted");
    }

    public function editPortfolio($id)
    {
        $portfolio = Portfolio::find($id);
        return view('admin.portfolio.editPortfolio', compact('portfolio'));
    }

    public function objectives(){
        $objectives=objective::all();
        return view('admin.objective.index',compact('objectives'));
    }


    public function addObjective(){
        return view('admin.objective.addObjective');
    }

    public function storeObjective(Request $request){
        $objective=new objective();
        $this->validate($request,[
            'objective'=>'required',
        ]);
        $objective->objective=$request->objective;
        $objective->save();

        return redirect(route('objectives'))->with('message',"Contact Added");
    }

    public function updateObjective(Request $request,$id){
        $objective=objective::find($id);
        $this->validate($request,[
            'objective'=>'required'
        ]);
        $objective->objective=$request->objective;
        $objective->save();
        return redirect(route('objectives'))->with('message',"Contact Updated");
    }

    public function deleteObjective($id){
        objective::find($id)->delete();
        return redirect(route('objectives'))->with('message',"Contact Deleted");
    }

    public function editObjective($id)
    {
        $objective = objective::find($id);
        return view('admin.objective.editObjective', compact('objective'));
    }

}
