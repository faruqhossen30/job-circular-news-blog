<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Circular;
use Illuminate\Http\Request;

class SinglecircularController extends Controller
{
  public function singlecircular($id)
  {
      $circulars = Circular::firstWhere('id',$id);
      $categories = Category::get();
      return view('frontend.singlecircular',compact('circulars','categories'));
  }
}
