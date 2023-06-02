<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControler extends Controller
{
    public function index() 
    {
        return view('auth.admin.dashboard');
    }

    public function add_product()
    {
        if (!$this->adminCan('add-product')) {

            abort('403', __('Bạn không có quyền này'));
      
        }
        return view('auth.admin.add_product');
    }

    public function update_product()
    {
        if (!$this->adminCan('update-product')) {

            abort('403', __('Bạn không có quyền này'));
      
        }
        return view('auth.admin.update_product');
    }

    public function list_product()
    {
        return view('auth.admin.list_product');
    }

    public function detail_product()
    {
        return view('auth.admin.detail_product');
    }
}