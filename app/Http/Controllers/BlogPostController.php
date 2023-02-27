<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use PDF;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = BlogPost::select()->paginate(5);
        return view('blog.index', ['blogs'=>$blogs]);
        //return $blogs[0]->title;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category =  new Category;
        $category = $category->selectCategory();

        // $category =  Category::selectCategory();

       // return  $category;

        return view('blog.create', ['categories' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            //insert -> lastid  => select where lastId
            $newPost = BlogPost::create([
                'title' => $request->title,
                'body'  => $request->body,
                'user_id' => Auth::user()->id,
                'categorys_id' => $request->categorys_id
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
           //select * from blog_posts where id = $blogPost" 
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
        $category =  Category::selectCategory();

        return view('blog.edit', ['blogPost' => $blogPost, 
                                'categories' => $category]);
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
        //update where blogPost->id  => select where blogPost->id
        $blogPost->update([
            'title' => $request->title,
            'body' => $request->body
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

    public function pdf(BlogPost $blogPost){

        $pdf = PDF::loadView('blog.show-pdf', ['blogPost' => $blogPost]);
        $nomPdf = "article_".$blogPost->id.".pdf";

        return $pdf->stream($nomPdf);
        // return $pdf->download($nomPdf);
    }
}