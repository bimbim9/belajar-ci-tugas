<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\View\View;

class Home extends BaseController
{

    protected $product;

    function __construct()
    {
        helper('form');
        helper('number');
        $this->product = new ProductModel();
    }

    function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('v_home', $data);
    }

    function contact()
    {
        return view('v_contact');
    }
}