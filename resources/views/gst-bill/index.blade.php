@extends('layout.app')

@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="page-title-box">
                <h2 class="page-title font-weight-bold text-uppercase">Manage Bills</h2>
            </div>
        </div>

    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <!--Include alert file-->
            @include('include.alert')

            <div class="card-box">
                <a href="{{ route('add-gst-bill') }}" class="btn btn-sm btn-blue waves-effect waves-light float-right">
                    <i class="mdi mdi-plus-circle"></i> Create New Bill
                </a>
                <h4 class="header-title mb-4 text-uppercase">Manage Bills</h4>

                <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100 table-bordered" id="tickets-table">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Invoice No</th>
                            <th>Cielnt's Info</th>
                            <th>Billing Info</th>
                            <th>Invoice Date</th>
                            <th class="hidden-sm">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if(count($bills))
                        @foreach($bills as $index => $bill)
                        <tr>
                            <td><b>{{ $index+1 }}</b></td>
                            <td>#{{ $bill->invoice_no }}</td>
                            <td>
                                <ul class="list-unstyled">
                                    <li><b>Name:</b> <span> {{ $bill->party->full_name }}</span></li>
                                    <li><b>Phone:</b> <span> {{ $bill->party->phone_no }}</span></li>
                                </ul>
                            </td>

                            <td>
                                <ul class="list-unstyled">
                                    <li><b>Total Amount:</b> <span>₹{{ $bill->total_amount }}</span></li>
                                    <li><b>TAX:</b> <span>₹{{ $bill->tax_amount }}</span></li>
                                    <li><b>Net Amount:</b> <span>₹{{ $bill->net_amount }}</span></li>
                                </ul>
                            </td>

                            <td>{{ date("d-m-Y", strtotime($bill->invoice_date)) }}</td>
                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('delete', ['gst_bills', $bill->id]) }}"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</a>
                                        <a class="dropdown-item" href="{{ route('print-gst-bill', $bill->id) }}"><i class="mdi mdi-printer mr-2 text-muted font-18 vertical-middle"></i>
                                            Print</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6">No record found!</td>
                        </tr>
                        @endif
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
