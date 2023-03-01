<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = session()->get('localeDB');

        $docs = Document::select('id', DB::raw("(case when title$lang is null then title else title$lang end) as title"))->paginate(5);
        
        return view('doc.index', ['docs'=>$docs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Document;

        $file = $request->file;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets', $filename);
        
        $data->file = $filename;
        $data->title = $request->title;
        $data->title_fr = $request->title_fr;
        $data->users_id = Auth::user()->id;

        $data->save();

        return redirect(route('document.index'));

        // https://www.youtube.com/watch?v=IYswY0Jgup4
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }

    public function download(){
        $filename = $request->input('filename');
    
        $file = File::where('user_id', Auth::id())
            ->where('filename', $filename)
            ->firstOrFail();
    
        $path = Storage::path('public/assets/documents/' . $filename);
    
        if(Storage::exists($path)){
            return Response::download($path, $filename);
        }
    }
}
