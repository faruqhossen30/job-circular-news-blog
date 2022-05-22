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
        $allnews = News::take(12)->get();
        // return $allnews;
        return view('frontend.homepage', compact('circulars', 'allnews'));
    }
}
