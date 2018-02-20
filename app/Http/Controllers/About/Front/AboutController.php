<?php

namespace App\Http\Controllers\About\Front;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function show()
    {
        $about = About::findOrFail(1);
        return view('about.front.show', compact('about'));
    }
}
