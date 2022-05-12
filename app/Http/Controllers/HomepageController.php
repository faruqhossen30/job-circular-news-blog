<?php

namespace App\Http\Controllers;

use App\Models\Circular;
use App\Models\News;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage()
    {
        $circulars = Circular::get();
        $allnews = News::get();
        // return $circulars;
        return view('frontend.homepage', compact('circulars', 'allnews'));
    }
}
