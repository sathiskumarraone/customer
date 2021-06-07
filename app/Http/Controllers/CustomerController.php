<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(Request $reg){
        

        

        
        $customer=new customer;
        $customer->id=$req->id;
        $customer->first_name=$req->first_name;
        $customer->last_name=$req->last_name;
        $customer->gender=$req->gender;
        $customer->save();
        return redirect ('customer');      
    }

    public function getdata(){

        $save=customer::all();
        return view('customer',['customers'=>$save]);
    }
}
