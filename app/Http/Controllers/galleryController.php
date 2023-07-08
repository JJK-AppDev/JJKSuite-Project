<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function showGallery()
    {
        return view('Userview.gallery');
    }

}
