<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BaseCurrency;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class CurrencyController extends Controller
{
    private $page = "admin.currency.";
    private $redirectTo = "admin.currency.index";
    private $iconDestination = 'media/currency/icon/';
    private $imageDestination = 'media/currency/image/';

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
            'rate' => ['required'],
            'icon' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:4096'],
            'image' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:4096'],
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()]);
        }
        if($validator->passes()){
            try{
                $input = $request->except('_token');
                if($request->hasFile('icon')){
                    $icon = $request->file('icon');
                    $iconName = hexdec(uniqid()) . '.' . $icon->getClientOriginalExtension();
                    $input['icon'] = $this->iconDestination.$iconName;
                    $icon->move($this->iconDestination, $iconName);
                }
                if($request->hasFile('image')){
                    $image = $request->file('image');
                    $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                    $input['image'] = $this->imageDestination.$imageName;
                    $image->move($this->imageDestination, $imageName);
                }
                
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
            'rate' => ['required'],
            'icon' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:4096'],
            'image' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:4096'],
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()]);
        }
        if($validator->passes()){
            try{
                $currency = Currency::find($id);
                $input = $request->except('_token');
                if($request->hasFile('icon')){
                    $icon = $request->file('icon');
                    $iconName = hexdec(uniqid()) . '.' . $icon->getClientOriginalExtension();
                    $input['icon'] = $this->iconDestination.$iconName;
                    $icon->move($this->iconDestination, $iconName);
                }
                if($request->hasFile('image')){
                    $image = $request->file('image');
                    $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                    $input['image'] = $this->imageDestination.$imageName;
                    $image->move($this->imageDestination, $imageName);
                }
                $currency->update($input);
                return response()->json(['msg' => 'Currency updated successfully', 'redirectRoute' =>route($this->redirectTo)]);
            } catch(\Exception $e){
                return response()->json(['db_error' => $e->getMessage()]);
            }
        }
    }

    public function delete($id)
    {
        Currency::find($id)->delete();
        return redirect()->back()->with($this->notify('success', 'Currency deleted successfully'));
    }


    public function apiCurrency()
    {
        $datas = Http::get('https://v6.exchangerate-api.com/v6/5775548f5cecdf2afa0a0668/latest/USD');
        $datas = json_decode($datas,true);
        $currencies = $datas['conversion_rates'];
        return view($this->page."apicurrency", compact('currencies'));
    }

    public function base_currency()
    {
        $base = BaseCurrency::first();
        $currencies = Currency::get();
        return view($this->page.'base_currency', compact('base', 'currencies'));
    }

    public function updateOrCreate(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'currency_id' => ['required'],
        ],[
            'currency_id.required' => 'Currency is required',
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()]);
        }

        if($validator->passes()){
            try{
                if($request->base_currency_id != null){
                    $base = BaseCurrency::find($request->base_currency_id);
                    $base->update(['currency_id' => $request->currency_id]);
                    return response()->json(['msg' => 'Base Currency updated successfully']);
                } else {
                    BaseCurrency::create(['currency_id' => $request->currency_id]);
                    return response()->json(['msg' => 'Base Currency created successfully']);
                }
            } catch(\Exception $e){
                return response()->json(['db_error' => $e->getMessage()]);
            }
        }
    }

    private function notify($type, $msg){
        return array(
            'alert-type' => $type,
            'message' => $msg,
        );
    }
}
