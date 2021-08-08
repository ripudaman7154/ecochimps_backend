<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vendors;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $vendors = User::query()->get();
        return view('admin.users.index',compact('vendors'));
    }

    public function create(Request $request)
    {

        if($request->isMethod('post'))
        {
            $data =  $request->validate([
                'first_name' => 'required|unique:vendors',
                'last_name' => 'required|unique:vendors',
                'email' =>'required',
                'password' =>'required',
            ]);


            $data = $request->all();

            $data['raw'] = $data['password'];
            $data['password'] = bcrypt($data['password']);

            User::query()->create($data);

            return  redirect()->back()->with('success','Admin successfully Created!');
        }

        return view('admin.users.create');
    }


    public function vendor_edit(Request $request,$id)
    {
        $vendor = User::query()->find($id);
        return view('admin.users.edit',compact('vendor'));
    }


}
