<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataServicesDetailController extends Controller
{
    public function detailblogs()
    {
        return view('frontend.detailblogs.detailblogs');
    }
}
