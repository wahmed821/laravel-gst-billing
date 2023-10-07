<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    // Table Name
    protected $table = "parties";

    // Primary key
    protected $primaryKey = "id";

    // Fillable columns
    protected $fillable = array(
        "party_type",
        "full_name",
        "phone_no",
        "address",
        "account_holder_name",
        "account_no",
        "bank_name",
        "ifsc_code",
        "branch_address"
    );

    public function gstBills()
    {
        return $this->hasMany(GstBill::class);
    }
}
