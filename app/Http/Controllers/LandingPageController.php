<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function home()
    {
        $data = [];
        return view('.landing.index', $data);
    }
}
