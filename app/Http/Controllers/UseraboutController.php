<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseraboutController extends Controller
{
    public function userAbout()
    {
        return view('Userview.about');
    }

}
