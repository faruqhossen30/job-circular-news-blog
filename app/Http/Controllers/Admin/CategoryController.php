<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

        $request->validate([
            'name' => 'required'
        ]);
        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $request->file('thumbnail')->storeAs(
                'categories',
                $request->file('thumbnail')->getClientOriginalName()
            );
            $thumbnailname = $request->file('thumbnail')->getClientOriginalName();
        }

        Category::create([
            'name'             => $request->name,
            'meta_description' => $request->meta_description,
            'slug'             => make_slug($request->name),
            'thumbnail'        => $thumbnailname,
            'meta_keyword'     => json_encode($request->meta_keyword)
        ]);

        // return redirect()->route('category.index');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::firstWhere('id', $id);
        // return $category;
        return view('admin.category.edit', compact('category'));
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
        $request->validate([
            'name' => 'required'
        ]);
        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $request->file('thumbnail')->storeAs(
                'catagories',
                $request->file('thumbnail')->getClientOriginalName()
            );
            $thumbnailname = $request->file('thumbnail')->getClientOriginalName();
        }

        Category::where('id', $id)->update([
            'name'             => $request->name,
            'meta_description' => $request->meta_description,
            'slug'             => make_slug($request->name),
            'thumbnail'        => $thumbnailname,
            'meta_keyword'     => json_encode($request->meta_keyword)
        ]);

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::where('id', $id)->first();
        Storage::disk('public')->delete('categories/'.$category->thumbnail);

        // return storage_path('app/catagories/'.$category->thumbnail);

        Category::where('id', $id)->delete();


        return redirect()->route('category.index');
    }
}
