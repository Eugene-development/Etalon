<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\LaruxController;

class DeliveryPage extends LaruxController
{
    public function index()
    {
        return view('pages.delivery');
    }
}
