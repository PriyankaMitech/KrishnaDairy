<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function saveProduct()
    {
        // Get form data
        $title = $this->request->getPost('title');
        $category = $this->request->getPost('category');

        // Create new instance of ProductModel
        $productModel = new ProductModel();

        // Insert data into database
        $data = [
            'title' => $title,
            'category' => $category,
            // Add other fields as needed
        ];
// print_r($data);die;
        // Insert data into database
        $productModel->insert($data);

        // Redirect back to the page after adding the product
        return redirect()->to('view_product');
    }
}
