<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Raksts;

class BlogController extends Controller
{
    
    /*
    |--------------------------------------------------------------------------
    | Bloga kontrolētājs
    |--------------------------------------------------------------------------
    |
    | Šis kontrolētājs nodrošina Bloga sadaļas CRUD 
    | funkcionalitāti un lietotāja pārvirzīšanu uz skatiem.
    |
    */

    /**
     *  Atgriež skatu ar visiem pieejamajiem rakstiem.
     */
    public function index()
    {
        $raksti = Raksts::all();
        return view("blog.index", compact("raksti"));
    }

    /**
     * Atgriež skatu ar jauna raksta izveides formu.
     */
    public function create()
    {
        return view("blog.create");
    }

    /**
     * Glabā datubāzē jaunu rakstu.
     */
    public function store(StorePostRequest $request)
    {
        $raksts = Raksts::create($request->validated());
        return redirect()->route("blog.show", compact("raksts"))->with("success","Jauns raksts izveidots!");
    }

    /**
     * Atgriež skatu ar konkrēto rakstu.
     */
    public function show(string $id)
    {
        $raksts = Raksts::find($id);
        return view("blog.show", compact("raksts"));
    }

    /**
     * Atgriež skatu ar formu konkrētā raksta modificēšanai ar raksta informāciju.
     */
    public function edit(string $id)
    {
        $raksts = Raksts::find($id);
        return view("blog.edit", compact("raksts"));
    }

    /**
     * Modificē rakstu datubāzē.
     */
    public function update(StorePostRequest $request)
    {
        $raksts = Raksts::find($request->id);
        $raksts->update($request->validated());
        return redirect()->route("blog.show", $request->id)->with("success","Raksts atjaunots!");
    }

    /**
     * Dzēš specifisko rakstu datubāzē.
     */
    public function destroy(string $id)
    {
        $raksts = Raksts::find($id);
        $raksts->delete();
        return redirect()->route("blog.index")->with("success","Raksts dzēsts!");
    }
}
