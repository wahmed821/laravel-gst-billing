<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use function Opis\Closure\unserialize;

class PartyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    # Function to load parties
    public function index()
    {
        // Get all parties
        //$parties = Party::all();

        // Get all parties with specific columns
        $parties = Party::select(
            'id',
            'party_type',
            'full_name',
            'phone_no',
            'address',
            'account_holder_name',
            'account_no',
            'bank_name',
            'ifsc_code',
            'branch_address',
            'created_at'
        )->get();

        return view("party.index", compact('parties'));
    }

    # Function to load add party view
    public function addParty()
    {
        return view("party.add");
    }

    # Function to create/store party
    public function createParty(Request $request)
    {
        // Valildation
        $request->validate([
            'party_type' => 'required',
            'full_name' => 'required|string|min:2|max:20',
            'phone_no' => 'required',
            'address' => 'required|max:255',

            'account_holder_name' => 'required|string|min:2|max:20',
            'account_no' => 'required',
            'bank_name' => 'required|max:255',
            'ifsc_code' => 'required|max:50',
            'branch_address' => 'required|max:255',
        ]);

        $param = $request->all();

        // Remove token from post data before inserting
        unset($param['_token']);
        Party::create($param);

        // Redirect to add party back
        return redirect()->route('add-party')->withStatus("Party created successfully");

        //return redirect()->route('add-party')->with('success', 'Party created successfully');
    }

    # Function to load edit party view
    public function editParty($party_id)
    {
        $data['party'] = Party::find($party_id);
        return view("party.edit", $data);
    }

    # Function to update party data
    public function updateParty($id, Request $request)
    {
        // Valildation
        $request->validate([
            'party_type' => 'required',
            'full_name' => 'required|string|min:2|max:20',
            'phone_no' => 'required',
            'address' => 'required|max:255',
            'account_holder_name' => 'required|string|min:2|max:20',
            'account_no' => 'required',
            'bank_name' => 'required|max:255',
            'ifsc_code' => 'required|max:50',
            'branch_address' => 'required|max:255',
        ]);

        // Update the record
        $param = $request->all();
        unset($param['_token']);
        unset($param['_method']);
        Party::where('id', $id)->update($param);
        return redirect()->route('manage-parties')->withStatus("Party updated successfully");
    }

    ## Function to delete party
    public function deleteParty(Party $party)
    {
        $party->delete();
        return redirect()->route('manage-parties')->withStatus("Party deleted successfully");
    }
}
