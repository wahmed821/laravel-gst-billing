<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['parties'] = DB::table('parties')->count('id');
        $data['invoices'] = DB::table('vendor_invoices')->count('id');
        $data['bills'] = DB::table('gst_bills')->count('id');
        $data['payments'] = DB::table('vendor_invoices')->sum('total_amount');

        return view('dashboard', $data);
    }
}
