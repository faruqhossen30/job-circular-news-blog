<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class SinglenewsController extends Controller
{
    public function singlenews($id)
    {
        $allnews = News::firstWhere('id',$id);
        $categories = Category::get();
        return view('frontend.singlenews',compact('allnews','categories'));
    }
}
