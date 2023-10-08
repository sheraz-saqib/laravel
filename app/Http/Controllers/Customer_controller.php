<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class Customer_controller extends Controller
{
    //

    public function index()
    {
        $url = url('/customer');
        $title = "Registeration";
        $data = compact('url','title');
        return view('customer')->with($data);
    }

    // public function registerView() {
    //     $url = url('/comp');
    //     $data = compact('url');
    //     return view('customer')->with($data);
    // }

    public function store(Request $request)
    {
            
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'contact' => 'required',
                'age' => 'required',
                'password' => 'required',
                'confirm_password'=>'required|same:password'
            ]
        );
        
// echo "<pre>";
// print_r($request->);
        $customer = new Customer;
        $customer->customer_name = $request['name'];
        $customer->customer_email = $request['email'];
        $customer->customer_password = password_hash($request['password'], PASSWORD_BCRYPT);
        $customer->customer_contact = $request['contact'];
        $customer->customer_age = $request['age'];
        $customer->save();
        return redirect('/customer');
    }

    public function view(){
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }
    public function customerDelete($id){

        $customer = Customer::find($id);
        $customers = Customer::all();
        if(!is_null($customer)){
            $customer->delete();
            return redirect('/customer');
        }
        if(is_null($customer)){
            $error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>failed!</strong> user cannot exists
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
$data = compact('error', 'customers');
            return view('customer-view')->with($data);
        }
        

    }


    public function customerEdit($id){
        $url = url('/customer/edit/'.$id);
        $title = "update";
        $customer = Customer::find($id);
        $data = compact('url', 'title', 'customer');
        return view('customer')->with($data);
    }


    public function customerupdate($id,Request $request){
        $customer = Customer::find($id);
        $customer->customer_name = $request['name'];
        $customer->customer_email = $request['email'];
        $customer->customer_password = password_hash($request['password'], PASSWORD_BCRYPT);
        $customer->customer_contact = $request['contact'];
        $customer->customer_age = $request['age'];
        $customer->status = $request['status'];
        $customer->save();
        return redirect('/customer');

    }
   
}
