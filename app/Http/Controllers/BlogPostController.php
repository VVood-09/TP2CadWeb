<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = session()->get('localeDB');

        $blogs = BlogPost::select('id', DB::raw("(case when title$lang is null then title else title$lang end) as title"))->paginate(5);
        
        return view('blog.index', ['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'title_fr'=> 'required',
            'body' => 'required',
            'body_fr' => 'required'
        ]);

       $newPost = BlogPost::create([
           'title' => $request->title,
           'body'  => $request->body,
           'title_fr' => $request->title_fr,
           'body_fr'  => $request->body_fr,
           'user_id' => Auth::user()->id,
       ]);

       return redirect(route('blog.show', $newPost->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        // var_dump($blogPost); die();

        $lang = session()->get('localeDB');

        if('title'.$lang != null){
            $blogPost->title = $blogPost['title'.$lang];
        }
        if('body'.$lang != null){
            $blogPost->body = $blogPost['body'.$lang];
        }

        return view('blog.show', ['blogPost' => $blogPost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {

        return view('blog.edit', ['blogPost' => $blogPost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $request->validate([
            'title' => 'required',
            'title_fr'=> 'required',
            'body' => 'required',
            'body_fr' => 'required'
        ]);

        $blogPost->update([
            'title' => $request->title,
            'body' => $request->body,
            'title_fr' => $request->title_fr,
            'body_fr' => $request->body_fr
        ]);

        return redirect(route('blog.show', $blogPost->id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();

        return redirect(route('blog.index'));
    }
}