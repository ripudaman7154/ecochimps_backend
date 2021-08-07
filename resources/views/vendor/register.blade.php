@extends('vendor.master')
    @section('content')
        <div class="main-panel">
                <div class="row">
                    <div class="col-md-8 grid-margin stretch-card offset-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Vendor Registration </h4>
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
                                        <input type="text" class="form-control" name="company_name" id="exampleInputEmail1" placeholder="Company Name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Business Email</label>
                                        <input type="email" name="business_email" class="form-control" id="exampleInputPassword1" placeholder="Business Email" />
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone Number</label>
                                        <input type="text" name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="Phone Number" />
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Contact Person Name</label>
                                        <input type="text" name="contact_person_name" class="form-control" id="exampleInputPassword1" placeholder="contact_person_name" />
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Contact Person Email</label>
                                        <input type="email" name="contact_person_email" class="form-control" id="exampleInputPassword1" placeholder="Contact Person Email" />
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Address" />
                                    </div>

                                    <button type="submit" class="btn btn-info mr-2"> Register </button>
                                    <a href="{{route('login')}}" onclick="return confirm('Are you sure you want to cancel ?')" class="btn btn-light">Cancel</a>

                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        @endsection
