<?php

namespace App\Http\Controllers;

use App\Models\Vendors;
use Illuminate\Http\Request;

class VendorController extends Controller
{


    public function register(Request $request)
    {
        if($request->isMethod('post'))
        {
           $data =  $request->validate([
                'company_name'=>'required|unique:vendors',
                'business_email' =>'required|unique:vendors',
                'phone_number' =>'required',
                'contact_person_name' =>'required',
                'contact_person_email' =>'required',
                'address' =>'required',
            ]);


           Vendors::query()->create($data);

           return  redirect()->back()->with('success','Account successfully registered! Your account will be approved with X business days');
        }
        return view ('vendor.register');
    }
}
