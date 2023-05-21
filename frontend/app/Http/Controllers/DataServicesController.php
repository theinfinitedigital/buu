<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataServicesController extends Controller
{
    public function blogs()
    {
        return view('frontend.blogs');
    }
}
