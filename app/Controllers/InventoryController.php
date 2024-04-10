<?php

namespace App\Controllers;

use App\Models\InventoryModel;

class InventoryController extends BaseController
{
    public function inventory()
    {
      
        $model = new InventoryModel();

        // Inserting a new inventory item
        $data = [
            'type' => $this->request->getPost('type'),
            'source' => $this->request->getPost('source'),
            'vendor_name' => $this->request->getPost('vendor_name'),
            'product' => $this->request->getPost('product'),
            'category' => $this->request->getPost('category'),
            'unit' => $this->request->getPost('unit'),
            'price' => $this->request->getPost('price'),
            'measurement' => $this->request->getPost('measurement'),
            'packaging' => $this->request->getPost('packaging'),
            'shelf_life_days' => $this->request->getPost('shelf_life_days')
        ];
//  print_r($data);die;
        $model->insert($data);
        return redirect()->to(base_url('view_inventory'))->with('success', 'Data saved successfully.');
        // Other inventory operations can be performed similarly
    }
}
