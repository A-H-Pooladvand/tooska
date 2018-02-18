<?php

namespace App\Http\Controllers\Main\Front;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Plan;
use App\WhyChooseUs;

class MainController extends Controller
{
    public function index()
    {
        $whyChooseUs = WhyChooseUs::latest()->take(6)->get(['id', 'title', 'summary', 'image']);
        $plans = Plan::latest()->take(3)->get(['id', 'title', 'content', 'price']);
        $blogs = Blog::latest()->take(4)->get(['id', 'title', 'summary', 'image']);

        return view('main.front.index', compact('whyChooseUs', 'plans', 'blogs'));
    }
}
