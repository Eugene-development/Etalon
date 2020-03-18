<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\LaruxController;

class AboutUsPage extends LaruxController
{
    public function index()
    {
        return view('pages.about');
    }
}
