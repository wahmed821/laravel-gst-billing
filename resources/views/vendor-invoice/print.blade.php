<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Invoice</title>
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

        <div class="content-page m-0 p-0">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h2 class="page-title font-weight-bold">Invoice</h2>
                            </div>
                        </div>
                    </div> -->
                    <!-- end page title -->

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card-box">
                                <!-- Logo & title -->
                                <div class="clearfix ">
                                    <div class="text-right">
                                        <h6><b>Date : </b><Span>02/09/2023</Span></h6>
                                        <!-- <h1>GoBulky</h1> -->
                                    </div>
                                    <!-- <div class="text-center">
                                        <span>Address: Mukta Prasad Road, Near Taxi Stand</span><br>
                                        <span>Bikaner-334001 (Raj.) India</span><br>
                                        <span><b>Email:</b> gobulky.com |<b>Web:</b> www.gobulky.com |<b>Mob:</b>
                                            +919694145570</span>
                                    </div>
                                    <div class="row pt-3 pb-1">
                                        <div class="col-6 text-right">
                                            <span class="text-right"><b>PAN NO:</b> BFAPA5321J</span>
                                        </div>
                                        <div class="col-6">
                                            <span>
                                                <b>GSTIN NO:</b> 08BFAPA5321J1ZV</span>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-12 text-center border">
                                        <b>
                                            <h3 class="m-1">INVOICE </h3>
                                        </b>
                                    </div>
                                </div>
                                <div class="row text-center ">
                                    <div class="col-md-4 border p-0">
                                        <b>
                                            <div class="border-bottom">
                                                <h5>Details of the Client |
                                                    Billed to</h5>
                                            </div>
                                        </b>
                                        <div class="row pl-2 pt-1">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Name : </label>
                                                <input type="text" style="border: none; line-height: -10;">
                                            </div>
                                        </div>
                                        <div class="row pl-2">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Address : </label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="row pl-2">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Phone : </label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="row pl-2 pb-1">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">State : </label>
                                                <span></span>
                                            </div>
                                            <div class="col-12 d-flex pb-1">
                                                <label for="">State Code : <span><b></b></span> </label>
                                                <!-- <input type="text" style="border: none; width: 30px;"> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 border p-0">
                                        <b>
                                            <div class="border-bottom">
                                                <h5>Bank Details</h5>
                                            </div>
                                        </b>
                                        <div class="row pl-2 pt-1">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Account Holder Name : </label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="row pl-2">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Account Number : </label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="row pl-2">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Bank Name : </label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="row pl-2">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Bank Address : </label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="row pl-2 pb-1">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">IFSC Code : </label>
                                                <span></span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3 border p-0">
                                        <b>
                                            <div class="border-bottom">
                                                <h5>Invoice Details</h5>
                                            </div>
                                        </b>
                                        <div class="row pl-2 pt-1">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Revrce Charge : </label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="row pl-2">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Invoice No : </label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="row pl-2">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Invoice Date : </label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="row pl-2 pb-1">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">State : </label>
                                                <span></span>
                                            </div>
                                            <div class="col-12 d-flex pb-1">
                                                <label for="">State Code : <span><b>08</b></span> </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-12 p-0">
                                        <div class="table-responsive table-bordered">
                                            <table class="table mt-4 table-centered border">
                                                <thead>
                                                    <tr>
                                                        <th class="py-0 heading-color w-8">
                                                            SR NO.</th>
                                                        <th class="py-0 heading-color">
                                                            DESCRIPTION</th>
                                                        <th class="text-center py-1 heading-color w-15">
                                                            AMOUNT
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <b>Web Design</b> <br />
                                                            2 Pages static website - my website
                                                        </td>
                                                        <td class="text-center">$660.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive -->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="row border">
                                    <div class="col-sm-6 col-lg-9 p-0">
                                    </div> <!-- end col -->
                                    <div class="col-sm-6 col-lg-3 mt-1">
                                        <ul class="list-unstyled">
                                            <li><b>Total :</b> <span class="float-right"><i class="fas fa-rupee-sign"></i>
                                                    0.00</span></li>
                                            <li><b>TAX :</b><span class="float-right"><i class="fas fa-rupee-sign"></i>
                                                    0.00</span>
                                            </li>
                                            <li><b>Grand Total :</b><span class="float-right"><i class="fas fa-rupee-sign"></i>
                                                    0.00</span>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="mt-4 mb-1">
                                    <div class="text-right d-print-none">
                                        <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light">Print <i class="mdi mdi-printer mr-1"></i></a>
                                    </div>
                                </div>
                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

</body>

</html>
