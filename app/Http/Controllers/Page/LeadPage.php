<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\LaruxController;

class LeadPage extends LaruxController
{
    public function index()
    {
        return view('pages.lead');
    }
}
