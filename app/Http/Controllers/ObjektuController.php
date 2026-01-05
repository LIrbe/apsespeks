<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreObjektsRequest;
use App\Models\Objekts;
use Illuminate\Support\Facades\Auth;

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
    //OMF01
    public function index()
    {
        $objekti = Objekts::all();
        $act_objekts = NULL;            //skatā objekti.index šis mainīgais nodrošina izvēlētā objekta informācijas attēlojumu
        return view("objekti.index", ["objekti" => $objekti, "act_objekts" => $act_objekts]);
    }

    /**
     * Atgriež skatu ar jauna objekta izveides formu.
     */
    //OMF02
    public function create()
    {
        return view("objekti.create");
    }

    /**
     * Glabā datubāzē jaunu objektu.
     */
    //OMF03
    public function store(StoreObjektsRequest $request)
    {
        $objekts = Objekts::create($request->validated());
        $objekts->user_id = Auth::user()->id;
        $objekts->save();
        return redirect()->route("objekti.show", compact("objekts"))->with("success","Jauns objekts pievienots!");
    }

    /**
     * Atgriež skatu ar konkrēto objektu.
     */
    //OMF04
    public function show(string $id)
    {
        $objekts = Objekts::find($id);
        return view("objekti.show", compact("objekts"));
    }

    /**
     * Atgriež skatu ar formu konkrētā objekta modificēšanai ar objekta informāciju.
     */
    //OMF05
    public function edit(string $id)
    {
        $objekts = Objekts::find($id);
        if(Auth::user()->id != $objekts->user_id){
            return back()->with('error', 'Objektu rediģēt var tikai objekta izveidotājs!');
        }
        else{
            return view("objekti.edit", compact("objekts"));
        }
    }

    /**
     * Modificē objektu datubāzē.
     */
    //OMF06
    public function update(StoreObjektsRequest $request, string $id)
    {
        $objekts = Objekts::find($id);
        $objekts->update($request->validated());
        return redirect()->route("objekti.show", $request->id)->with("success","Objekts atjaunots!");
    }

    /**
     * Dzēš specifisko objektu datubāzē.
     */
    //OMF07
    public function destroy(string $id)
    {
        $objekts = Objekts::find($id);
        $objekts->delete();
        return redirect()->route("objekti.index")->with("success","Objekts dzēsts!");
    }
}
