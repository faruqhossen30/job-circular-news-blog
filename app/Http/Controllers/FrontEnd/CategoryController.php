<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Circular;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($slug)
    {
        $category = Category::firstWhere('slug', $slug);

        $circulars = Circular::where('category_id', $category->id)->get();

        // return $circulars;

        return view('frontend.categorycirculars', compact('circulars', 'category'));
    }



    public function latestNews()
    {
        $sort = null;
        if (isset($_GET['sort'])) {
            $sort = trim($_GET['sort']);
        }

        $count = null;
        if (isset($_GET['count'])) {
            $count = trim($_GET['count']);
        }


        $allnews = News::when($sort, function ($query, $sort) {
            return $query->orderBy('id', $sort);
        })

            ->paginate($count ?? 10);
        return view('frontend.latestnews', compact('allnews'));
    }
}
