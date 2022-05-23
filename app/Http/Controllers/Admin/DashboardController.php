<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Circular;
use App\Models\News;
use PHPUnit\Framework\Constraint\Count;

class DashboardController extends Controller
{
    public function dashboardPage()
    {

        $totalCategory = Category::count();
        $totalCircular = Circular::count();
        $totalNews = News::count();

        return view('admin.dashboard',compact('totalCategory','totalCircular','totalNews'));
    }
}
