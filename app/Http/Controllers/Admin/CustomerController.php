<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::with(['project'])->get();
        return view('admin.customers.list', compact('customers'));
    }

    public function delete($id)
    {
        Customer::destroy($id);
        return back()->with('message', 'Customer deleted');
    }
}
