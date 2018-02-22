<?php

namespace App\Http\Controllers\Plan\Front;

use App\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlanController extends Controller
{
    public function show($id)
    {
        $plan = Plan::findOrFail($id);
        return view('plan.front.show', compact('plan'));
    }
}
