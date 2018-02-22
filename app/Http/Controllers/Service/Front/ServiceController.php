<?php

namespace App\Http\Controllers\Service\Front;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(12);
        return view('service.front.index', compact('services'));
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('service.front.show', compact('service'));
    }
}
