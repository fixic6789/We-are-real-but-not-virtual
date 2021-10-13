<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewStoriesController extends Controller
{
    public function StoriesList()
    {
        return view('stories');
    }
}
