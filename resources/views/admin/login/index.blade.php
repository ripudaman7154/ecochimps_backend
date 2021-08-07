@extends('admin.login.master')
    @section('content')
        <div class="main-panel">
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card offset-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Welcome Back !</h4>
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
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="text" class="form-control" name="login" id="exampleInputEmail1" placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                                    </div>
                                    <div class="offset-md-5">
                                     <button type="submit" class="btn btn-success"> SUBMIT </button>
                                    </div>
{{--                                    <a href="{{route('vendor.register')}}" class="btn btn-primary mr-2"> I'm A Vendor ! </a>--}}
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        @endsection
