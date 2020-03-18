<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\LaruxController;

class Homepage extends LaruxController
{
    public function index()
    {
        return view('pages.homepage');
    }
}
