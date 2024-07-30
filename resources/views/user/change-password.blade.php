@extends('layout.app')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title font-weight-bold"> Change Password </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <!--Include alert file-->
        @include('include.alert')

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title text-uppercase">Fill the form</h4>
                    <hr>
                    <form action="{{ route('change-password-submit') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Current Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="current_pass" required="">
                                <div class="input-group-append" data-password="false">
                                    <div class="input-group-text">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>New Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password-new" class="form-control" name="new_pass" required="">
                                <div class="input-group-append" data-password="false">
                                    <div class="input-group-text">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary float-right mb-2">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
