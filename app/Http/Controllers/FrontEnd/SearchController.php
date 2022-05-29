<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Circular;
use App\Models\News;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $keyword = null;
        if (isset($_GET['keyword'])) {
            $keyword = trim($_GET['keyword']);
        }
        $sort = null;
        if (isset($_GET['sort'])) {
            $sort = trim($_GET['sort']);
        }
        $count = null;
        if (isset($_GET['count'])) {
            $count = trim($_GET['count']);
        }

        $category = null;
        if (isset($_GET['category'])) {
            $category = $_GET['category'];
        }
        $type = null;
        if (isset($_GET['type'])) {
            $type = $_GET['type'];
        }


        $categories = Category::get();
        $circulars = Circular::get();

        if ($type && $type == 'news') {
            $allnews = News::when($category, function ($query, $category) {
                return $query->whereIn('category_id', $category);
            })
                ->when($keyword, function ($query, $keyword) {
                    return $query->where('title', 'like', '%' . $keyword . '%');
                })
                ->when($sort, function ($query, $sort) {
                    return $query->orderBy('id', $sort);
                })
                ->paginate($count ?? 10);

            return view('frontend.search', compact('allnews', 'categories', 'circulars'));
        } else {
            $circulars = Circular::when($category, function ($query, $category) {
                return $query->whereIn('category_id', $category);
            })
                ->when($keyword, function ($query, $keyword) {
                    return $query->where('title', 'like', '%' . $keyword . '%');
                })
                ->when($sort, function ($query, $sort) {
                    return $query->orderBy('id', $sort);
                })
                ->paginate($count ?? 10);

            return view('frontend.circularsearch', compact('categories', 'circulars'));
        }
    }
}
