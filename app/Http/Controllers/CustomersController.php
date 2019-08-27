<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function getlist()
    {
        $customers =Customer::all();
        return view('customer',[
        'customers' => $customers,
        ]);
    }
    public function save(Request $request)
    {
        $data = $request->validate([
           'name' =>'required | min:3',
           'email' =>'required | min:3 |email:rfc,dns'
        ]);

        $customers = new Customer();
        $customers -> name = $request['name'];
        $customers -> email = $request['email'];
        $customers -> save();
        return back();
    }
}
