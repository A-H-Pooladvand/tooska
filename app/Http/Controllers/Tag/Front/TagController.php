<?php

namespace App\Http\Controllers\Tag\Front;

use App\Http\Controllers\Controller;
use App\Tag;

class TagController extends Controller
{
    /**
     * Indicates which module should we get
     *
     * @var string
     */
    protected $module;

    public function index($module, $slug)
    {
        switch ($module) {
            case 'blog':
                $posts = Tag::where('slug', $slug)->firstOrFail()->blogs()->paginate(10);
                break;
        }

        return view('tag.front.index', compact('posts'));
    }
}
