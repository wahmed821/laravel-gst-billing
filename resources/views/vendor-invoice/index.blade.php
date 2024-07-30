@extends('layout.app')

@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="page-title-box">
                <h2 class="page-title font-weight-bold text-uppercase">Manage Vendor Invoices</h2>
            </div>
        </div>

    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <!--Include alert file-->
            @include('include.alert')

            <div class="card-box">
                <h4 class="header-title mb-4 text-uppercase">All Invoices</h4>

                <table id="basic-datatable" class="table table-hover m-0 table-centered dt-responsive nowrap w-100 table-bordered">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Invoice No</th>
                            <th>Cielnt's Info</th>
                            <th>Amount</th>
                            <th>Invoice Date</th>
                            <th class="hidden-sm">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        @foreach($invoices as $index => $invoice)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>#{{ $invoice->invoice_no }}</td>
                            <td>
                                <ul class="list-unstyled">
                                    <li><b>Name:</b> <span> {{ $invoice->full_name }}</span></li>
                                    <li><b>Phone:</b> <span> {{ $invoice->phone_no }}</span></li>
                                </ul>
                            </td>

                            <td>
                                <ul class="list-unstyled">
                                    <li><span>₹{{ $invoice->total_amount }}</span></li>
                                </ul>
                            </td>

                            <td>{{ date("d-m-Y", strtotime($invoice->invoice_date)) }}</td>
                            <td>
                                <a target="_blank" href="{{ route('vendor-invoice.show', [base64_encode($invoice->id)]) }}" class="btn btn-primary btn-sm">Print</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- end col -->
        </div>
    </div>
    <!-- end row -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
</div>

@endsection
