<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Circular;
use Illuminate\Http\Request;

class CircularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $circulars = Circular::with('category')->get();
        // return $circulars;
        return view('admin.circular.index', compact('circulars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();

        return view('admin.circular.create', compact('categories'));
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

        $thumbnailname = null;
        if($request->file('thumbnail')){
            $thumbnailname = $request->thumbnail->getClientOriginalName();
            $request->thumbnail->storeAs('circular', $thumbnailname, 'public');
        }

        $data = [
            'title'                => $request->title,
            'slug'                 => make_slug($request->title),
            'content'              => $request->content,
            'thumbnail'            => $thumbnailname,
            'category_id'          => $request->category_id,
            'start_date'           => $request->start_date,
            'end_date'             => $request->end_date,
            'organization_name'    => $request->organization_name,
            'organization_website' => $request->organization_website,
            'apply_link'           => $request->apply_link,
            'vacancy'              => $request->vacancy,
            'meta_title'           => $request->meta_title,
            'meta_description'     => $request->meta_description,
            'meta_tag'             => $request->meta_keyword
        ];

        Circular::create($data);

        return redirect()->route('circular.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
