<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Vendor Invoice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Coding Kalakar - Invoice" name="description" />
    <meta content="Coding Kalakar" name="author" />
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

<body class="bg-white">

    <!-- Begin page -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page m-0 mt-4 p-0">
            <div class="content">
                <!-- Start Content-->
                <div class="container">
                    <div class="row mt-3">
                        @if($invoice)
                        <div class="col-12">
                            <div class="card-box border">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h3 class="m-1">INVOICE </h3>
                                        <p><b>Date : </b><span>{{ date("d F Y", strtotime($invoice->invoice_date)) }}</span> | <b>Invoice Number : </b><span>{{ $invoice->invoice_no }}</span></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 p-2 border">
                                        {{ $invoice->full_name }} <br>
                                        {{ $invoice->address }} <br>
                                        (M) +91 {{ $invoice->phone_no }}
                                    </div>
                                    <div class="col-md-6 p-2 border text-right">
                                        <b>Client info:</b><br>
                                        RIZWANA PARVEEN<br>
                                        Silawato Ki Masjid Ke Pass,<br>
                                        Sarvodya Basti, Bikaner,<br>
                                        Rajasthan - 334004



                                        <?php /*
                                        {{ strtoupper($company->name) }} <br>
                                        {!! $company->address !!} <br>
                                        @if($company->phone_number) (M) +91 {{ $company->phone_number }}<br> @endif
                                        @if($company->email) (Email) {{ $company->email }}<br> @endif
                                        @if($company->website) (Website) {{ $company->website }}<br> @endif
                                        */ ?>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12 p-0">
                                        <div class="table table-responsive">
                                            <table class="table mt-4 table-centered border">
                                                <thead>
                                                    <tr>
                                                        <th class="py-0 heading-color">DESCRIPTION</th>
                                                        <th class="text-center py-1 heading-color w-15">AMOUNT</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{!! str_replace("\n", "<br>", $invoice->item_description) !!}</td>
                                                        <td class="text-center"><i class="fas fa-rupee-sign"></i> {{ $invoice->total_amount }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>Total</th>
                                                        <td class="text-center"><i class="fas fa-rupee-sign"></i> {{ $invoice->total_amount }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive -->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-sm-8 col-lg-8 p-0">
                                        <div class="alert alert-info">
                                            <strong class="text-uppercase text-center">Bank Account Details:</strong>
                                            <p class="m-0">
                                                <b>A/c No:</b> {{ $invoice->account_no }}<br>
                                                <b>Name:</b> {{ $invoice->account_holder_name }}<br>
                                                <b>Branch:</b> {{ $invoice->bank_name }}, {{ $invoice->branch_address }}<br>
                                                <b>IFSC:</b> {{ $invoice->ifsc_code }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-lg-4 mt-1 text-center">
                                        <p>
                                            <b>{{ $invoice->full_name }}</b><br>
                                            {{ date("d F Y", strtotime($invoice->invoice_date)) }}
                                        </p>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="mt-4 mb-1">
                                    <div class="text-right d-print-none">
                                        <a href="{{ url('vendor-invoice/create/'.base64_encode($invoice->party_id)) }}" class="btn btn-success waves-effect waves-light">New Invoice <i class="mdi mdi-undo mr-1"></i></a>
                                        <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light">Print <i class="mdi mdi-printer mr-1"></i></a>
                                    </div>
                                </div>
                            </div> <!-- end card-box -->
                        </div>
                        @else
                        <div class="col-12">
                            <div class="alert alert-warning">No record found!</div>
                        </div>
                        @endif
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
