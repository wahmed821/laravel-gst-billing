<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Create Invoice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App css -->
    <link href="{{ asset('public/assets/css2/bootstrap-creative.min.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{ asset('public/assets/css2/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="{{ asset('public/assets/css2/bootstrap-creative-dark.min.css') }}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="{{ asset('public/assets/css2/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled />

    <!-- icons -->
    <link href="{{ asset('public/assets/css2/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('public/assets/style.css') }}">

</head>

<body data-layout-mode="detached" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <!-- start page title -->
        <div class="content-page m-0 p-0">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title font-weight-bold text-uppercase"> Create Invoice </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation pb-2" method="post" action="{{ route('vendor-invoice.store') }}">
                                        @csrf

                                        <h4 class="page-title "><i data-feather="edit-3" class="pr-0 mr-1 text-uppercase"></i>Enter Your
                                            Details</h4>
                                        <hr>
                                        <div class="row my-3">
                                            <div class="form-group col-md-6">
                                                <label for="">Name</label>
                                                <input type="text" name="full_name" class="form-control border-bottom" id="validationCustom01" placeholder="Enter Full Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Phone Number</label>
                                                <input type="text" name="phone_no" class="form-control border-bottom" id="validationCustom01" placeholder="Enter Phone/Mobile no.">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label for="">Address</label>
                                                <input type="text" name="address" class="form-control border-bottom" id="validationCustom02" placeholder="Enter Address">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="">Invoice Date</label>
                                                <input type="date" name="invoice_date" class="form-control border-bottom" id="validationCustom01">
                                            </div>
                                        </div>
                                        <h4 class="page-title pt-2"><i data-feather="edit-3" class="pr-0 mr-1"></i>ENTER
                                            YOUR BANK DETAIL</h4>
                                        <hr>
                                        <div class="row my-3">
                                            <div class="form-group col-md-4">
                                                <label for="">Account Holder Name</label>
                                                <input type="text" name="account_holder_name" class="form-control border-bottom" id="validationCustom01" placeholder="Enter Account Holder Name">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Account Number</label>
                                                <input type="text" name="account_no" class="form-control border-bottom" id="validationCustom01" placeholder="Enter Account Number">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Bank Name</label>
                                                <input type="text" name="bank_name" class="form-control border-bottom" id="validationCustom02" placeholder="Enter Bank Name">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="">IFSC Code</label>
                                                <input type="text" name="ifsc_code" class="form-control border-bottom" id="validationCustom01" placeholder="Enter IFSC Code">

                                            </div>
                                            <div class="form-group col-md-9">
                                                <label for="">Branch Address</label>
                                                <input type="text" name="branch_address" class="form-control border-bottom" id="validationCustom01" placeholder="Enter Address">
                                            </div>
                                        </div>
                                        <h4 class="page-title "><i data-feather="edit-3" class="pr-0 mr-1"></i>ENTER
                                            PRODUCT/ITEM DETAIL
                                        </h4>
                                        <hr>

                                        <div class="row">
                                            <div class="col-md-8 border p-1">
                                                <span>DESCRIPTIONS</span>
                                            </div>
                                            <div class="col-md-4 border p-1">
                                                TOTAL AMOUNT
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 border p-2">
                                                <input class="form-control" name="item_description" />
                                            </div>
                                            <div class="col-md-4 border p-2">
                                                <input class="form-control" type="text" name="total_amount" id="totalInput" oninput="calculateTotalAmount()">
                                            </div>
                                        </div>

                                        <div class="row mt-0">
                                            <div class="col-md-12">
                                                <ul style="list-style: none;float: right;">
                                                    <li>
                                                        <b>Total Amount:</b> ₹ <span type="text" id="totalDisplay">0</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                </div>
                                <div class="row mt-3 px-2">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="declaration" class="form-control border-bottom" id="validationCustom05" placeholder="Declaration (if any)">
                                        </div>

                                        <button type="submit" class="btn btn-success float-right mb-2">SUBMIT <i data-feather="arrow-right" class="ml-1 fw-bold"></i></button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- End Form  -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{ asset('public/assets/js2/vendor.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('public/assets/libs2/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('public/assets/libs2/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Dashboar 1 init js-->
    <script src="{{ asset('public/assets/js2/pages/dashboard-1.init.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('public/assets/js2/app.min.js') }}"></script>

    <script src="{{ asset('public/assets/script.js') }}"></script>
</body>

</html>
