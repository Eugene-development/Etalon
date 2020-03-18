<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SinglePost extends LaruxController
{
    public function index()
    {
        return view('pages.single-post');
    }
}
