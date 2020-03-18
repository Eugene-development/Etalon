<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\LaruxController;

class PricePage extends LaruxController
{
    public function index()
    {
        return view('pages.price');
    }
}
