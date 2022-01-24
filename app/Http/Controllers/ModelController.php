<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function  list()
    {
        return view('backend.list');
    }

    public function  form()
    {
        return view('backend.form');
    }

    public function  gallery()
    {
    return view('backend.gallery');

    }
}
