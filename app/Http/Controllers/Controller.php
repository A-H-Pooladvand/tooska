<?php

namespace App\Http\Controllers;

use App\Http\Controllers\_Controller\Grid\Grid;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getGrid(Request $request)
    {
        return new Grid($this, $request);
    }

}
