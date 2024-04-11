<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'tbl_product_details';
    protected $primaryKey = 'p_id';
    protected $allowedFields = ['product', 'category', 'type', 'product', 'measurement', 'source', 'vendor_name', 'price'];




    public function getProductData()
    {
        $this->table('tbl_product_details');

        // Fetch all records from the specified table
        $result = $this->findAll();

        return $result;
    }
    public function getproduct()
    {
        $this->table('tbl_product_details');

        // Fetch all records from the specified table
        $result = $this->findAll();

        return $result;
    }
   
}
