<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vendors;
use App\Notifications\BusinessRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class DashboardController extends Controller
{
    public function __construct()
    {

    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function vendors()
    {
        $vendors = Vendors::query()->get();
        return view('admin.vendors.index',compact('vendors'));
    }


    public function vendor_edit(Request $request,$id)
    {
        $vendor = Vendors::query()->find($id);


        if($request->isMethod('post')) {

            $data = $request->validate([
                'company_name' => 'required|unique:vendors,id,'.$vendor->id,
                'business_email' => 'required|unique:vendors,id,'.$vendor->id,
                'phone_number' => 'required',
                'contact_person_name' => 'required',
                'contact_person_email' => 'required',
                'address' => 'required',
            ]);

            $vendor->update($data);

            return redirect()->route('vendor.list.all')->with('success',"{$vendor->company_name} Vendor successfully updated");

        }



        return view('admin.vendors.edit',compact('vendor'));
    }

    public function approve_vendor(Request $request,$id)
    {

        $vendor = Vendors::query()->find($id);
        $vendor->update(['status'=>'approved']);

        Notification::route('mail', 'listermatrix360@gmail.com')->notify(new  BusinessRegistration($vendor));

        return redirect()->route('vendor.list.all')->with('success',"{$vendor->company_name } Vendor successfully approved");
    }

    public function reject_vendor(Request $request,$id)
    {

        $vendor = Vendors::query()->find($id);
        $vendor->update(['status'=>'rejected']);

        Notification::route('mail', 'listermatrix360@gmail.com')->notify(new  BusinessRegistration($vendor));

        return redirect()->route('vendor.list.all')->with('success','Vendor successfully rejected');
    }


}
