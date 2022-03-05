<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Notifications\ProjectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// "laravel/vonage-notification-channel": "^2.5",

class BuyController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'project_id' => ['required'],
            'name' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required'],
            'message' => ['nullable'],
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()]);
        }

        if($validator->passes()){
            try{
                $input = $request->except('_token');
                $customer = Customer::create($input);
                $notification['customer_name'] = $customer->name;
                $admin = User::where('role', 1)->first();
                $notification['type'] = null;
                $customer->notify((new ProjectRequest($notification)));
                if($admin != null){
                    $notification['admin_name'] = $admin->name;
                    $notification['type'] = 'admin';
                    $admin->notify((new ProjectRequest($notification)));
                }
                return response()->json(['msg' => 'Your request has been submitted successfully']);
            } catch(\Exception $e){
                return response()->json(['db_error' => $e->getMessage()]);
            }
        }
    }
}
