<?php

namespace App\Controllers;
use App\Models\InventoryModel;
use App\Models\ProductModel;
class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Validate email and password
        // You may want to add more validation rules here

        if ($email === 'valid@email.com' && $password === 'validpassword') {
            // Authentication successful, redirect to dashboard
            return redirect()->to('dashboard');
        } else {
            // Authentication failed, redirect back to login with error message
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
    public function dashboard()
    {
       
        echo  view('dashboard');
        
    }
    public function sidebar()
    {
        echo  view('sidebar');
        
    }
    public function inventory()
    {
        $model = new InventoryModel();
        $modelnew = new ProductModel();
        $data['inventory'] = $model->getInventoryData();
        $data['product']=$modelnew->getproduct();
// echo '<pre>'; print_r($data['product']);die;
        // Pass the fetched data to the view
        return view('view_inventory', ['data' => $data]);
    }
    public function Diary_inventory()
    {
        $model = new InventoryModel();
        $modelnew = new ProductModel();
        $data['inventory'] = $model->getInventoryData();
        $data['product']=$modelnew->getproduct();
// print_r($data['product']);die;
        // Pass the fetched data to the view
        return view('view_inventory_dairy', ['data' => $data]);
    }
    public function Non_Diary_inventory()
    {
        $model = new InventoryModel();
        $modelnew = new ProductModel();
        $data['inventory'] = $model->getInventoryData();
        $data['product']=$modelnew->getproduct();
// print_r($data['product']);die;
        // Pass the fetched data to the view
        return view('view_inventory_non_dairy', ['data' => $data]);
    }
    public function footer()
    {
        echo  view('footer');
        
    }
    public function product()
    {
        echo  view('view_product');
        
    }
    public function Vendor()
    {
        echo  view('view_vendor');
        
    }
    public function Reports()
    { $model = new InventoryModel();
        $data['inventory'] = $model->getInventoryData();
        echo  view('view_reports',['data' => $data]);
        
    }
    public function P_master()
    {
        echo  view('view_product_master');
        
    }
    
}
