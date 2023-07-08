<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function userBlog()
    {
        return view('Userview.blog');
    }

}
