<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function saveProduct()
    {
        //print_r($_POST);die;
        // Get form data
        $type = $this->request->getPost('type');
        $product = $this->request->getPost('product');
        $category = $this->request->getPost('category');
       
        $data = [
            'type' =>$type,
            'product' => $product,
            'category' => $category,
           
        ];

        $productModel->insert($data);

        // Redirect back to the page after adding the product
        return redirect()->to('view_product');
    }
}
