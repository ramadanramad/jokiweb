<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    public function service()
    {
        return view('service');
    }
}
