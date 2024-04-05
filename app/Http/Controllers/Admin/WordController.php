<?php

namespace App\Http\Controllers\admin;

use App\Models\Tag;
use App\Models\Word;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


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
        $tags = Tag::select('label', 'id')->get();
        return view('admin.words.create', compact('word', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string|unique:words',
                'description' => 'required|string',
                //'link_id' => 'nullable|exists:links,id',
                //'image' => 'nullable|image|mimes:png,jpg,jpeg',
                //'url' => 'required|url:http,https',
                'tags' => 'nullable|exists:tags,id'
            ],
            [
                'title.required' => 'Il titolo è obbligatorio',
                'title.unique' => 'Non possono esistere più progetti con lo stesso titolo',
                'description.required' => 'La descrizione è obbligatoria',
                //'link_id.exists' => 'Link non valida',
                //'image.image' => 'Il file inserito non è un\'immagine', 
                //'image.mimes' => 'Le estensione possono essere .png, .jpg, .jpeg', 
                //'url.required' => 'L\'indirizzo di riferimento è obbligatorio',
                //'url.url' => 'L\'url inserito non è corretto',
                'tags.exists' => 'Le tecnologie selezionate non sono valide'
            ]); 

        $data = $request->all();
        $word = new Word;
        $word->fill($data);
        $word->slug = Str::slug($word->title);
        // Controllo se mi arriva un file, questa funzione mi restituisca un url
        // if(Arr::exists($data, 'image')){
        //     $extension = $data['image']->extension(); //mi restituisce l'estensione dell'immagine caricata.
        //     //Lo salvo e prendo l'url
        //     $img_url = Storage::putFileAs('word_images', $data['image'], "$word->slug.$extension");
        //     $word->image = $img_url;
        // };
        $word->save();

        if(Arr::exists($data, 'tags')){
            $word->tags()->attach($data['tags']);
        }

        

        return to_route('admin.words.show', $word)->with('message', 'Nuova parola inserita con successo')->with('type', 'success');
        
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
        $tags = Tag::select('label', 'id')->get();
        $prev_tag = $word->tags->pluck('id')->toArray();    
    
        
        return view('admin.words.edit', compact('word', 'tags', 'prev_tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Word $word)
    {
        $request->validate(
            [
                'title' => ['required', 'string', Rule::unique('words')->ignore($word->id)],
                'description' => 'required|string',
                //'link_id' => 'nullable|exists:links,id',
                //'image' => 'nullable|image|mimes:png,jpg,jpeg',
                //'url' => 'required|url:http,https',
                'tags' => 'nullable|exists:tags,id'
            ],
            [
                'title.required' => 'Il titolo è obbligatorio',
                'title.unique' => 'Non possono esistere più progetti con lo stesso titolo',
                'description.required' => 'La descrizione è obbligatoria',
                //'link_id.exists' => 'Link non valida',
                //'image.image' => 'Il file inserito non è un\'immagine', 
                //'image.mimes' => 'Le estensione possono essere .png, .jpg, .jpeg', 
                //'url.required' => 'L\'indirizzo di riferimento è obbligatorio',
                //'url.url' => 'L\'url inserito non è corretto',
                'tags.exists' => 'Le tecnologie selezionate non sono valide'
            ]); 

        $data = $request->all();
        $word->fill($data);
        $word->slug = Str::slug($data['title']);
        // Controllo se mi arriva un file, questa funzione mi restituisca un url
        // if(Arr::exists($data, 'image')){
        //     $extension = $data['image']->extension(); //mi restituisce l'estensione dell'immagine caricata.
        //     //Lo salvo e prendo l'url
        //     $img_url = Storage::putFileAs('word_images', $data['image'], "$word->slug.$extension");
        //     $word->image = $img_url;
        // };
        $word->save();

        if(Arr::exists($data, 'tags')){
            $word->tags()->sync($data['tags']);
        }

        
        return to_route('admin.words.show', $word);
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
