<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleProduct extends LaruxController
{
    public function index()
    {
        return view('pages.single-products');
    }
}
