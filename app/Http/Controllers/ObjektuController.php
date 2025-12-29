<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreObjektsRequest;
use App\Models\Objekts;

class ObjektuController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Objektu kontrolētājs
    |--------------------------------------------------------------------------
    |
    | Šis kontrolētājs nodrošina Objektu sadaļas CRUD 
    | funkcionalitāti un lietotāja pārvirzīšanu uz skatiem.
    |
    */
    /**
     * Atgriež objektu skatu.
     */
    public function index()
    {
        $objekti = Objekts::all();
        $objekts = NULL;            //skatā objekti.index šis mainīgais nodrošina objekta informācijas attēlojumu
        return view("objekti.index", ["objekti" => $objekti, "objekts" => $objekts]);
    }

    /**
     * Atgriež skatu ar jauna objekta izveides formu.
     */
    public function create()
    {
        return view("objekti.create");
    }

    /**
     * Glabā datubāzē jaunu objektu.
     */
    public function store(StoreObjektsRequest $request)
    {
        Objekts::create($request->validated());
        return redirect()->route("objekti.show", $request->id)->with("success","Jauns objekts pievienots!");
    }

    /**
     * Atgriež skatu ar konkrēto objektu.
     */
    public function show(string $id)
    {
        $objekts = Objekts::find($id);
        return view("objekti.show", compact("objekts"));
    }

    /**
     * Atgriež skatu ar formu konkrētā objekta modificēšanai ar objekta informāciju.
     */
    public function edit(string $id)
    {
        $objekts = Objekts::find($id);
        return redirect()->route("objekti.edit", $objekts->id);
    }

    /**
     * Modificē objektu datubāzē.
     */
    public function update(StoreObjektsRequest $request, string $id)
    {
        $objekts = Objekts::find($id);
        $objekts->update($request->validated());
        return redirect()->route("objekti.show", $request->id)->with("success","Objekts atjaunots!");
    }

    /**
     * Dzēš specifisko objektu datubāzē.
     */
    public function destroy(string $id)
    {
        $objekts = Objekts::find($id);
        $objekts->delete();
        return redirect()->route("objekti.index")->with("success","Objekts dzēsts!");
    }
}
