<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Circular;
use Illuminate\Http\Request;

class SinglecircularController extends Controller
{
  public function singlecircular($slug)
  {
      $circular = Circular::firstWhere('slug',$slug);
      $categories = Category::get();
      return view('frontend.singlecircular',compact('circular','categories'));
  }
}
