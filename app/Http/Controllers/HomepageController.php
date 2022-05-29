<?php

namespace App\Http\Controllers;

use App\Models\Circular;
use App\Models\News;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage()
    {
        $circulars = Circular::latest()->paginate();
        $allnews = News::latest()->take(12)->get();
        // return $circulars;
        return view('frontend.homepage', compact('circulars', 'allnews'));
    }
}
