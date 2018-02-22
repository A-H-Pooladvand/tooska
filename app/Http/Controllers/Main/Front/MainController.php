<?php

namespace App\Http\Controllers\Main\Front;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Plan;
use App\Sample;
use App\Service;
use App\WhyChooseUs;

class MainController extends Controller
{
    public function index()
    {
        $whyChooseUs = WhyChooseUs::latest()->take(6)->get(['id', 'title', 'summary', 'image']);
        $plans = Plan::latest()->take(3)->get(['id', 'title', 'content', 'price']);
        $blogs = Blog::latest()->take(4)->get(['id', 'title', 'summary', 'image']);
        $services = Service::latest()->take(12)->get(['id', 'title', 'content', 'image']);
        $samples = Sample::latest()->take(20)->get(['id', 'image']);

        return view('main.front.index', compact('whyChooseUs', 'plans', 'blogs', 'services', 'samples'));
    }
}
