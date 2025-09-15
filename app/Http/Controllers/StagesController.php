<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StagesController extends Controller
{
    public function myName()
    {
        return view('name');
    }
}
