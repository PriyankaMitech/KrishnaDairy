<?php

namespace App\Models;

use CodeIgniter\Model;

class VendorModel extends Model
{
    protected $table = 'tbl_vendor_details';
    protected $primaryKey = 'id'; // Change 'id' to match your primary key column name if it's different
    protected $allowedFields = [
        'vendor_name',
        'company_name',
        'email',
        'gst_number',
        'pan_number',
        'vmobile_number',
        'poc',
       'v_product',
       'v_rate',
        'address',
        'billing_address'
    ];

    // Add any validation rules or other customizations here as needed
}
