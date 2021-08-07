@extends('admin.master')
        @section('content')
            <div class="main-panel">
                <div class="content-wrapper pb-0">
                    <div class="page-header flex-wrap">
                        <div class="header-left">
                            <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Create new document </button>
                            <button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Import documents </button>
                        </div>
                        <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                            <div class="d-flex align-items-center">
                                <a href="#">
                                    <p class="m-0 pr-3">Dashboard</p>
                                </a>
                                <a class="pl-3 mr-4" href="#">
                                    <p class="m-0">ADE-00234</p>
                                </a>
                            </div>
                            <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                                <i class="mdi mdi-plus-circle"></i> Add Vendor </button>
                        </div>
                    </div>
                    <!-- first row starts here -->
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Vendor, {{$vendor->company_name}}</h4>

                                    @if (\Session::has('success'))
                                        <div class="alert alert-success">
                                            <ul>
                                                <li>{!! \Session::get('success') !!}</li>
                                            </ul>
                                        </div>
                                    @endif

                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form class="forms-sample" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Company Name</label>
                                            <input type="text" class="form-control" name="company_name" value="{{$vendor->company_name}}" id="exampleInputEmail1" placeholder="Company Name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Business Email</label>
                                            <input type="email" name="business_email" class="form-control" value="{{$vendor->business_email}}" id="exampleInputPassword1" placeholder="Business Email" />
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Phone Number</label>
                                            <input type="text" name="phone_number" class="form-control"  value="{{$vendor->phone_number}}" id="exampleInputPassword1" placeholder="Phone Number" />
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contact Person Name</label>
                                            <input type="text" name="contact_person_name" class="form-control"  value="{{$vendor->contact_person_name}}"  id="exampleInputPassword1" placeholder="contact_person_name" />
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contact Person Email</label>
                                            <input type="email" name="contact_person_email" class="form-control" value="{{$vendor->contact_person_email}}"  id="exampleInputPassword1" placeholder="Contact Person Email" />
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Address</label>
                                            <input type="text" name="address" class="form-control" value="{{$vendor->address}}"  id="exampleInputPassword1" placeholder="Address" />
                                        </div>

                                        <button type="submit" class="btn btn-info mr-2"> Update </button>

                                        <a href="{{route('login')}}" onclick="return confirm('Are you sure you want to reject ?')" class="btn btn-danger">Reject</a>
                                        <a href="{{route('vendor.approve',$vendor->id)}}" onclick="return confirm('Are you sure you want to approve ?')" class="btn btn-success">Approve</a>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
                    </div>
                </footer>
            </div>
            @endsection
