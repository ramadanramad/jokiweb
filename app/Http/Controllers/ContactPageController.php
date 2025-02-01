<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function kontak()
    {
        return view('kontak');
    }
}
