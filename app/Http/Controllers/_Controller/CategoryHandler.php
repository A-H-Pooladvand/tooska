<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 2/12/2018
 * Time: 4:12 PM
 */

namespace App\Http\Controllers\_Controller;


use App\Blog;
use App\Http\Controllers\Controller;

class CategoryHandler
{
    protected $controller;

    public function __construct(Controller $controller)
    {
        $this->controller = $controller;
    }

    /**
     * Checks if $categoryType is equal to defined class namespace
     *
     * @param string $categoryType
     * @return bool
     */
    public function check(string $categoryType)
    {
        switch ($categoryType) {
            case Blog::class:
                return true;
                break;
            default:
                return false;
        }
    }

}