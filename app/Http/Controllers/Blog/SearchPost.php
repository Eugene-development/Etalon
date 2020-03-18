<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchPost extends LaruxController
{
    public function index()
    {
        return view('pages.search-posts');
    }
}
