<?php

/**
 * Tutoriel suivit pour la gestion de fichier, téléchargement et téléversement
 * https://www.youtube.com/watch?v=IYswY0Jgup4
 */

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Stroage;

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

        $docs = Document::select('id', 'file', 'users_id', DB::raw("(case when title$lang is null then title else title$lang end) as title"))->paginate(5);
        
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

        $request->validate([
            'title' => 'required|between:2,50',
            'title_fr'=> 'required|between:2,50',
            'file'  => 'required|mimes:pdf,docx,doc,zip'
        ]);

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
        return view('doc.edit', ['document' => $document]);
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
        $request->validate([
            'title' => 'required|between:2,50',
            'title_fr'=> 'required|between:2,50',
        ]);

        $document->update([
            'title' => $request->title,
            'title_fr' => $request->title_fr,
        ]);

        return redirect(route('document.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();

        return redirect(route('document.index'));
    }

    public function download(Request $request, $file){
        return response()->download(public_path('assets/'.$file));
    }
}
