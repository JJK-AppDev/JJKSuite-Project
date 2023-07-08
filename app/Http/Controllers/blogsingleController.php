<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogsingleController extends Controller
{
    public function blogSingle()
    {
        return view('Userview.blog-single');
    }

}
