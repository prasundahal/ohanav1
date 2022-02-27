<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CurrencyController extends Controller
{
    private $page = "admin.currency.";
    private $redirectTo = "admin.currency.index";

    public function index()
    {
        $currencies = Currency::latest()->get();
        return view($this->page."index", compact('currencies'));
    }

    public function create()
    {
        return view($this->page.'create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'currency_code' => ['required', 'unique:currencies,currency_code'],
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()]);
        }
        if($validator->passes()){
            try{
                $input = $request->except('_token');
                $currency = Currency::create($input);
                return response()->json(['msg' => 'Currency created successfully', 'redirectRoute' => route($this->redirectTo)]);
            } catch(\Exception $e){
                return response()->json(['db_error' => $e->getMessage()]);
            }
        }
    }

    public function edit($id)
    {
        $currency = Currency::findOrFail($id);
        return view($this->page.'edit',compact('currency'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'currency_code' => ['required', 'unique:currencies,currency_code,'.$id],
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()]);
        }
        if($validator->passes()){
            try{
                $currency = Currency::find($id);
                $input = $request->except('_token');
                $currency->update($input);
                return response()->json(['msg' => 'Currency updated successfully', 'redirectRoute' =>route($this->redirectTo)]);
            } catch(\Exception $e){
                return response()->json(['db_error' => $e->getMessage()]);
            }
        }
    }

    public function delete($id)
    {
        Currency::destroy($id);
        return response()->json(['msg' => 'Currency deleted succesfully', 'redirectRoute' => route($this->redirectTo)]);
    }
}
