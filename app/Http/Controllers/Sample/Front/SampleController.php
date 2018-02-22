<?php

namespace App\Http\Controllers\Sample\Front;

use App\Sample;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    public function index()
    {
        $samples = Sample::paginate(10);
        return view('sample.front.index', compact('samples'));
    }

    public function show($id)
    {
        $sample = Sample::findOrFail($id);
        return view('sample.front.show', compact('sample'));
    }
}
