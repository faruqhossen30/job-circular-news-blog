<?php

namespace App\Http\Controllers;

use App\Models\Circular;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage()
    {
        $circulars = Circular::get();
        // return $circulars;
        return view('frontend.homepage', compact('circulars'));
    }
}
