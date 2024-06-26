<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function saveProduct()
    {
        //print_r($_POST);die;
        // Get form data
        
        $title = $this->request->getPost('product');
        $category = $this->request->getPost('category');
        $type = $this->request->getPost('type');
        $product = $this->request->getPost('product');
        $measurement = $this->request->getPost('measurement');
        $source = $this->request->getPost('source');
        $vendor_name = $this->request->getPost('vendor_name');
        $price = $this->request->getPost('price');
        $productModel = new ProductModel();
        $data = [
            'product' => $title,
            'category' => $category,
            'type' =>$type,
            'product' =>$product,
            'measurement' =>$measurement,
            'source' =>$source,
            'vendor_name' =>$vendor_name,
            'price' => $price
            // Add other fields as needed
        ];

        $productModel->insert($data);

        // Redirect back to the page after adding the product
        return redirect()->to('view_product');
    }

    public function saveProductmaster()
    {
        $productModel = new ProductModel();
        $db = \Config\Database::connect();
        $type = $this->request->getPost('type');
        $product = $this->request->getPost('product');
        $category = $this->request->getPost('category');
       
        $data = [
            'type' =>$type,
            'product' => $product,
            'category' => $category,
           
        ];
// print_r
        $db->table('tbl_product_master')->insert($data);
        return redirect()->to(base_url('view_product_master'))->with('success', 'Data saved successfully.');
    
    }
}
