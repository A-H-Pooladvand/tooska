<?php

namespace App\Http\Controllers;

use App\Http\Controllers\_Controller\Grid\Grid;
use App\Http\Controllers\_Controller\TagHandler;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * JEasyUi's grid filters, search, sort and etc...
     *
     * @param Request $request
     * @return Grid
     */
    protected function getGrid(Request $request)
    {
        return new Grid($this, $request);
    }

    /**
     * Handling tags such as sync and attach to tag (polymorphic) table
     *
     * @param array $newTags
     * @return TagHandler
     */
    protected function tags(array $newTags)
    {
        return new TagHandler($this, $newTags);
    }

}
