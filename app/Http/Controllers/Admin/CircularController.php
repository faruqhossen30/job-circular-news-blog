<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Circular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

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

        $photoname = null;
        if ($request->file('thumbnail')) {
            $extension = $request->thumbnail->getClientOriginalExtension();
            $name = hexdec(uniqid());
            $photoname = $name.'.'.$extension;
            // $request->thumbnail->storeAs('news', $thumbnailname, 'public');
            $full = Image::make($request->file('thumbnail'))->save(storage_path('app/public/circular/full/' . $photoname));
            $medium = Image::make($request->file('thumbnail'))->resize(
                300, null, function ($constraint) {
                    $constraint->aspectRatio();
                }
            )->save(storage_path('app/public/circular/medium/' . $photoname));
            $small = Image::make($request->file('thumbnail'))->resize(
                150, null, function ($constraint) {
                    $constraint->aspectRatio();
                }
            )->save(storage_path('app/public/circular/small/' . $photoname));
        }

        $circular_image = $request->file('circular_image');

        $data = [
            'title'                => $request->title,
            'slug'                 => make_slug($request->title),
            'description'          => $request->description,
            'thumbnail'            => $photoname,
            'category_id'          => $request->category_id,
            'start_date'           => $request->start_date,
            'end_date'             => $request->end_date,
            'organization_name'    => $request->organization_name,
            'organization_website' => $request->organization_website,
            'apply_link'           => $request->apply_link,
            'vacancy'              => $request->vacancy,
            'meta_title'           => $request->meta_title,
            'meta_description'     => $request->meta_description,
            'meta_tag'             => json_encode($request->meta_keyword),
            'user_id'              => Auth::user()->id,
        ];

        $circular = Circular::create($data);

        // if (!empty($circular_image)) {
        //     foreach ($circular_image as $image) {
        //         $thumbnailname = $request->thumbnail->getClientOriginalName();
        //         $request->thumbnail->storeAs('circular', $thumbnailname, 'public');

        //         ProductImgFull::create([
        //             'url' => $image,
        //             'product_id' => $product->id,
        //         ]);
        //     }
        // };


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
        $circulars = Circular::find($id);
        return view('admin.circular.show',compact('circulars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $circular = Circular::find($id);


        // return $categories;
        return view('admin.circular.edit',compact('circular','categories'));
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
        $photoname = null;
        if ($request->file('thumbnail')) {
            $extension = $request->thumbnail->getClientOriginalExtension();
            $name = hexdec(uniqid());
            $photoname = $name.'.'.$extension;
            // $request->thumbnail->storeAs('news', $thumbnailname, 'public');
            $full = Image::make($request->file('thumbnail'))->save(storage_path('app/public/circular/full/' . $photoname));
            $medium = Image::make($request->file('thumbnail'))->resize(
                300, null, function ($constraint) {
                    $constraint->aspectRatio();
                }
            )->save(storage_path('app/public/circular/medium/' . $photoname));
            $small = Image::make($request->file('thumbnail'))->resize(
                150, null, function ($constraint) {
                    $constraint->aspectRatio();
                }
            )->save(storage_path('app/public/circular/small/' . $photoname));
        }

        $circular_image = $request->file('circular_image');

        Circular::where('id', $id)->update([
            'title'                => $request->title,
            'slug'                 => make_slug($request->title),
            'description'          => $request->description,
            'thumbnail'            => $photoname,
            'category_id'          => $request->category_id,
            'start_date'           => $request->start_date,
            'end_date'             => $request->end_date,
            'organization_name'    => $request->organization_name,
            'organization_website' => $request->organization_website,
            'apply_link'           => $request->apply_link,
            'vacancy'              => $request->vacancy,
            'meta_title'           => $request->meta_title,
            'meta_description'     => $request->meta_description,
            'meta_tag'             => json_encode($request->meta_keyword)
        ]);
        return redirect()->route('circular.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $circular = Circular::find($id);
       $circular->delete();
       return redirect()->route('circular.index');
    }
}
