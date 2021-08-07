<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vendors;
use Illuminate\Support\Facades\Request;

class UserController extends Controller
{

    public function index()
    {
        $vendors = User::query()->get();
        return view('admin.users.index',compact('vendors'));
    }

    public function create()
    {
        return view('admin.users.create');
    }


    public function vendor_edit(Request $request,$id)
    {
        $vendor = Vendors::query()->find($id);
        return view('admin.vendors.edit',compact('vendor'));
    }


}
