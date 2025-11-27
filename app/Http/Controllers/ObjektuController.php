<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreObjektsRequest;
use Illuminate\Foundation\Console\StorageLinkCommand;
use Illuminate\Http\Request;
use App\Models\Objekts;
use Illuminate\Support\Facades\Route;

class ObjektuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objekti = Objekts::all();
        $objekts = NULL;
        return view("objekti.index", ["objekti" => $objekti, "objekts" => $objekts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("objekti.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreObjektsRequest $request)
    {
        Objekts::create($request->validated());
        return redirect()->route("objekti.show", $request->id)->with("success","Jauns objekts pievienots!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $objekts = Objekts::find($id);
        return view("objekti.show", compact("objekts"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $objekts = Objekts::find($id);
        return redirect()->route("objekti.edit", $objekts->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreObjektsRequest $request, string $id)
    {
        $objekts = Objekts::find($id);
        $objekts->update($request->validated());
        return redirect()->route("objekti.show", $request->id)->with("success","Objekts atjaunots!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $objekts = Objekts::find($id);
        $objekts->delete();
        return redirect()->route("objekti.index")->with("success","Objekts dzēsts!");
    }
}
