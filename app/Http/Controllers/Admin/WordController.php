<?php

namespace App\Http\Controllers\admin;

use App\Models\Tag;
use App\Models\Word;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $words = Word::all();
        return view('admin.words.index', compact('words'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $word = new Word();
        $tags = Tag::all();
        return view('admin.words.create', compact('word', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return to_route('admin.words.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Word $word)
    {
        return view('admin.words.show', compact('word'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Word $word)
    {
        return view('admin.words.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Word $word)
    {
        return to_route('admin.words.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Word $word)
    {
        $word->delete();    
        return to_route('admin.words.index');
    }
}
