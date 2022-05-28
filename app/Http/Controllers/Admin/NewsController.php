<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allnews = News::latest()->get();
        return view('admin.news.index', compact('allnews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photoname = null;
        if ($request->file('thumbnail')) {
            $extension = $request->thumbnail->getClientOriginalExtension();
            $name = hexdec(uniqid());
            $photoname = $name.'.'.$extension;
            // $request->thumbnail->storeAs('news', $thumbnailname, 'public');
            $full = Image::make($request->file('thumbnail'))->save(storage_path('app/public/news/full/' . $photoname));
            $medium = Image::make($request->file('thumbnail'))->resize(
                300, null, function ($constraint) {
                    $constraint->aspectRatio();
                }
            )->save(storage_path('app/public/news/mediam/' . $photoname));
            $small = Image::make($request->file('thumbnail'))->resize(
                150, null, function ($constraint) {
                    $constraint->aspectRatio();
                }
            )->save(storage_path('app/public/news/small/' . $photoname));
        }

        News::create([
            'title'             => $request->title,
            'slug'              => make_slug($request->title),
            'description'       => trim($request->description),
            'thumbnail'         => $photoname,
            'category_id'       => $request->category_id,
            'meta_description'  => trim($request->meta_description),
            'meta_keyword'      => json_encode($request->meta_keyword),
            'end_date'          => $request->end_date,
            'user_id'           =>Auth::user()->id
        ]);

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::firstWhere('id', $id);
        $categories = Category::all();
        // return $news;
        return view('admin.news.edit', compact('news', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request->all();

        $photoname = null;
        if ($request->file('thumbnail')) {
            $extension = $request->thumbnail->getClientOriginalExtension();
            $name = hexdec(uniqid());
            $photoname = $name.'.'.$extension;
            // $request->thumbnail->storeAs('news', $thumbnailname, 'public');
            $full = Image::make($request->file('thumbnail'))->save(storage_path('app/public/news/full/' . $photoname));
            $medium = Image::make($request->file('thumbnail'))->resize(
                300, null, function ($constraint) {
                    $constraint->aspectRatio();
                }
            )->save(storage_path('app/public/news/mediam/' . $photoname));
            $small = Image::make($request->file('thumbnail'))->resize(
                150, null, function ($constraint) {
                    $constraint->aspectRatio();
                }
            )->save(storage_path('app/public/news/small/' . $photoname));
        }

        News::where('id', $id)->update([
            'title'            => $request->title,
            'slug'             => make_slug($request->title),
            'description'      => trim($request->description),
            'thumbnail'        => $photoname,
            'category_id'      => $request->category_id,
            'meta_description' => trim($request->meta_description),
            'meta_keyword'     => json_encode($request->meta_keyword),
            'end_date'         => $request->end_date,
            'user_id'          => Auth::user()->id,
        ]);

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('news.index');
    }
}
