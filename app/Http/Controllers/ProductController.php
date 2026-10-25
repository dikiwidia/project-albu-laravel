<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        echo 'Albu';
    }

    public function product()
    {
        $data = ['A', 'B', 'C'];

        return view('pages.product', compact('data'));
    }

    public function customer()
    {
        return view('pages.customer');
    }
}
