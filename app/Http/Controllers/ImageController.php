<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\StoreImageRequest;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $urls = Storage::allFiles(storage_path("uploads"));

        return view("gallery.index", compact("urls"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $url = Storage::url("uploads/{$id}");

        return view('gallery.show', compact('url'));
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
