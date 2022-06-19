<?php

namespace App\Http\Controllers;

use App\Http\Models;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        return view('userSide.about');
    }
}
