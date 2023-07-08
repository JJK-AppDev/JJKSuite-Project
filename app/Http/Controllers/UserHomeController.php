<?php

namespace App\Http\Controllers;

class UserHomeController extends Controller
{
    public function userHome()
    {
        return view('Userview.index');
    }
}
