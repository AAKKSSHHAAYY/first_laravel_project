<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function getlist()
    {
        // $customers =Customer::all();
        $activeCustomers = Customer::active()->get();
        // $inactiveCustomers = Customer::where('active',0)->orderBy('id', 'DESC')->get();
        $inactiveCustomers = Customer::inactive()->get();
        // return view('customer',['activeCustomers' => $activeCustomers,'inactiveCustomers'=>$inactiveCustomers
        // ]);
        // ! OR same result above line to pass the data to view
        return view('customer',compact('inactiveCustomers','activeCustomers'));
    }
    
    public function save(Request $request)
    {
        $data = $request->validate([
           'name' =>'required | min:3',
           'active' =>'required',
           'email' =>'required | min:3 |email:rfc,dns'
        ]);
        // if we wan to add option field than we jsut pull in validation array with blank rule

        // $customers = new Customer();
        // $customers -> name = $request['name'];
        // $customers -> active = $request['active'];
        // $customers -> email = $request['email'];
        // $customers -> save();
        
        

        // OR as code as above

        Customer::create($data);
        return back();
    }
}
