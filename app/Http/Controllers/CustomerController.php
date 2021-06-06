<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){

         $data=customer::all();
         return view('Customer',['customers'=>$data]);
    }
}
