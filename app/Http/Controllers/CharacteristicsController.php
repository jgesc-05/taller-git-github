<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharacteristicsController extends Controller
{
    public function workExperiences()
    {
        return view('work');
    }

    public function abilities()
    {
        return view('abilities');
    }

    public function educationalInfo()
    {
        return view('academics');
    }


}
