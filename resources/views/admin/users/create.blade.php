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
                                <i class="mdi mdi-plus-circle"></i> Add User </button>
                        </div>
                    </div>
                    <!-- first row starts here -->
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add Admin User </h4>
                                    <form class="forms-sample" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First Name</label>
                                            <input type="text" class="form-control" name="first_name" value="" id="exampleInputEmail1" placeholder="First Name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Last Name</label>
                                            <input type="text" name="last_name" class="form-control" value="" id="exampleInputPassword1" placeholder="Last Name" />
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input type="email" name="email" class="form-control"  value="" id="exampleInputPassword1" placeholder="Email" />
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password </label>
                                            <input type="password" name="contact_person_name" class="form-control"  value=""  id="exampleInputPassword1" placeholder="contact_person_name" />
                                        </div>


                                        <button type="submit" class="btn btn-info mr-2"> Update </button>

                                        <a href="{{url()->previous()}}" onclick="return confirm('Are you sure you want to cancel ?')" class="btn btn-danger">Cancel</a>

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
