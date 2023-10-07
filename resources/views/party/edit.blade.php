@extends('layout.app')

@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title font-weight-bold text-uppercase"> Edit Party </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <!-- Start Form  -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!--Include alert file-->
                    @include('include.alert')

                    <h4 class="header-title text-uppercase"> Basic Info</h4>
                    <hr>
                    <form class="needs-validation" method="post" action="{{ route('update-party', $party->id) }}">
                        @csrf
                        <!--To pass a put request-->
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom01">Type</label>
                                    <select name="party_type" class="form-control border-bottom" id="validationCustom01" placeholder="Please select Type">
                                        <option value="">Please select</option>
                                        <option value="client" @if($party->party_type == 'client') selected @endif>Client</option>
                                        <option value="vendor" @if($party->party_type == 'vendor') selected @endif>Vendor</option>
                                        <option value="employee" @if($party->party_type == 'employee') selected @endif>Employee</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom01">Full Name</label>
                                    <input type="text" value="{{ $party->full_name }}" name="full_name" class="form-control border-bottom " id="validationCustom01" placeholder="Enter client's full name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Phone/Mobile Number</label>
                                    <input type="text" value="{{ $party->phone_no }}" name="phone_no" class="form-control border-bottom " id="validationCustom02" placeholder="Enter phone/mobile number">
                                    <div class="invalid-feedback">
                                        Please provide a Number.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="validationCustom03">Address</label>
                                    <input type="text" name="address" value="{{ $party->address }}" class="form-control border-bottom " id="validationCustom02" placeholder="Enter Address">
                                </div>
                            </div>
                        </div>


                        <h4 class="header-title text-uppercase">Bank Details</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom04">Account Holder Name</label>
                                    <input type="text" name="account_holder_name" value="{{ $party->account_holder_name }}" class="form-control border-bottom " id="validationCustom04" placeholder="Enter Accoumt Holder name">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom05">Account Number</label>
                                    <input type="text" name="account_no" value="{{ $party->account_no }}" class="form-control border-bottom " id="validationCustom05" placeholder="Enter Account Number">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Bank Name</label>
                                    <input type="text" name="bank_name" value="{{ $party->bank_name }}" class="form-control border-bottom " id="validationCustom02" placeholder="Enter Bank Name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">IFSC Code</label>
                                    <input type="text" name="ifsc_code" value="{{ $party->ifsc_code }}" class="form-control border-bottom " id="validationCustom02" placeholder="Enter IFSC Code">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Branch Address</label>
                                    <input type="text" name="branch_address" value="{{ $party->branch_address }}" class="form-control border-bottom " id="validationCustom02" placeholder="Enter Branch Address">
                                </div>
                            </div>
                        </div>

                        <br>

                        <button class="btn btn-primary" type="submit">Update</button>
                        <a href="{{ route('manage-parties') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
