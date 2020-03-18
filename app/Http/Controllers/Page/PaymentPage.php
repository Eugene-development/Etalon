<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\LaruxController;

class PaymentPage extends LaruxController
{
    public function index()
    {
        return view('pages.payment');
    }
}
