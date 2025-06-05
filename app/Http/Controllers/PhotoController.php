<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Tag;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $photos = Photo::with('tags')->get();
        return view('photos.index', compact('photos'));// devuelve todo a fotos para que se vea
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tags = Tag::all(); // primero llama a tags para cuando s ecree las fotos podramos ponerlas acorde a las que quereamos para la istancia
        return view('photos.create', compact('tags')); // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $photo = Photo::create($request->only('title', 'url')); // crea la foto con los datos que le pasamos porque si no tambien se suman los tags y otras cosas
        $photo->tags()->attach($request->input('tags'));
        //array de ids
        return redirect()->route('photos.index');//

    }
    // A PARTIR DE AQUI ABAJO METODOS QUE HAY QUE REVISAR PORQUE SE HICIERON RAPIDO POR PROFESORA

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
