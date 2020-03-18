<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\LaruxController;

class ContactPage extends LaruxController
{
    public function index()
    {
        return view('pages.contact');
    }
}
