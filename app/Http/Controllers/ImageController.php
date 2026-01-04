<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /*
    |---------------------------------------------------------------
    | Attēlu/Galerijas kontrolētājs
    |---------------------------------------------------------------
    |
    | Šis kontrolētājs nodrošina galerijas sadaļas funkcionalitāti, 
    | attēlu uzglabāšanu un lietotāja pārvirzīšanu uz galerijas 
    | skatiem.
    |
    */
    /**
     * Atgriež galerijas skatu ar attēliem.
     */
    //GMF01
    public function index()
    {
        $urls = Storage::allFiles(storage_path("uploads"));

        return view("gallery.index", compact("urls"));
    }

    /**
     * Glabā datubāzē jaunu augšupielādētu attēlu.
     */
    //GMF02
    public function store(array $uploads)
    {
        $filePaths = [];
        foreach ($uploads as $file) {
            $path = $file->store("uploads", 'public');
            $filePaths[] = $path;
        }
        return $filePaths;
    }

    /**
     * Parāda izolētu izvēlēto attēlu.
     */
    //GMF03
    public function show(string $id)
    {
        $url = Storage::url("uploads/{$id}");

        return view('gallery.show', compact('url'));
    }

    /**
     * Dzēš izvēlēto attēlu.
     */
    //GMF04
    public function destroy(string $id)
    {
        Storage::delete("uploads/{$id}");
        return redirect()->view("gallery.index")->with("Attēls veiksmīgi dzēsts!");
    }
}
