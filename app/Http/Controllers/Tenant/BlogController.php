<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('blog',compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
    $blog =Blog::create(
        [
            'title' => $request->title,
            'description' => $request->description
        ]
    );

    if($blog){
        return back()->with([
            'success' => 'Blog created successfully'
        ]);
    }
        return back()->withErrors([
            'title' => 'Something went wrong'
        ])->onlyInput('title');

}}
