<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZscoreController extends Controller
{
    public function index()
    {
        return view('admin.import-zscore');
    } 
}
