<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Circular;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($id)
    {
        $categories = Category::firstWhere('id', $id);
        $allnews = Circular::where('category_id', $id)->get();
        $latestNews = News::all();
        return view('frontend.categorynews', compact('categories', 'allnews', 'latestNews'));
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
