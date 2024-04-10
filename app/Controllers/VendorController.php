<?php

namespace App\Controllers;

use App\Models\VendorModel;

class VendorController extends BaseController
{
    public function Vendor()
    {
        // Load the model
        $model = new VendorModel();

        // Collect data from the form
        $data = [
            'vendor_name' => $this->request->getPost('vendor_name'),
            'company_name' => $this->request->getPost('company_name'),
            'email' => $this->request->getPost('email'),
            'gst_number' => $this->request->getPost('gst_number'),
            'pan_number' => $this->request->getPost('pan_number'),
            'vmobile_number' => $this->request->getPost('vmobile_number'),
            'poc' => $this->request->getPost('poc'),
            'v_product' => $this->request->getPost('v_product'),
            'v_rate' => $this->request->getPost('v_rate'),
            'address' => $this->request->getPost('address'),
            'billing_address' => $this->request->getPost('billing_address')
        ];
//  print_r($data);die;
        // Insert data into the database
        $model->insert($data);

        // Redirect to a page or return a response
        return redirect()->to(base_url('view_vendor'))->with('success', 'Data saved successfully.');
    }
}
