<?php

namespace App\Models;

use CodeIgniter\Model;

class InventoryModel extends Model
{
    protected $table = 'tbl_inventory_details';
    protected $primaryKey = 'id';
    protected $allowedFields = ['source','vendor_name','product', 'category', 'unit', 'price','measurement','packaging','half_quantity','full_quantity','shelf_life_days'];

    public function getInventoryData()
    {
        $this->table('tbl_inventory_details');

        // Fetch all records from the specified table
        $result = $this->findAll();

        return $result;
    }
  
}
