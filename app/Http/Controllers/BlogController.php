<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Raksts;
use Illuminate\Support\Facades\Auth;

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
    
    //BMF01
    public function index()
    {
        $raksti = Raksts::where('type', 'blog')->get();
        return view("blog.index", compact("raksti"));
    }

    /**
     * Atgriež skatu ar jauna raksta izveides formu.
     */
    
    //BMF02
    public function create()
    {
        return view("blog.create");
    }

    /**
     * Glabā datubāzē jaunu rakstu.
     */
    //BMF03
    public function store(StorePostRequest $request)
    {
        $raksts = Raksts::create($request->validated());
        $raksts->user_id = Auth::user()->id;
        $raksts->save();
        return redirect()->route("blog.show", compact("raksts"))->with("success","Jauns raksts izveidots!");
    }

    /**
     * Atgriež skatu ar konkrēto rakstu.
     */
    //BMF04
    public function show(string $id)
    {
        $raksts = Raksts::find($id);
        return view("blog.show", compact("raksts"));
    }

    /**
     * Atgriež skatu ar formu konkrētā raksta modificēšanai ar raksta informāciju.
     */
    //BMF05
    public function edit(string $id)
    {
        $raksts = Raksts::find($id);
        if(Auth::user()->id != $raksts->user_id){
            return back()->with('error', 'Rakstu rediģēt var tikai raksta izveidotājs!');
        }
        else{
            return view("blog.edit", compact("raksts"));
        }
    }

    /**
     * Modificē rakstu datubāzē.
     */
    //BMF06
    public function update(StorePostRequest $request)
    {
        $raksts = Raksts::find($request->id);
        $raksts->update($request->validated());
        return redirect()->route("blog.show", $request->id)->with("success","Raksts atjaunots!");
    }

    /**
     * Dzēš specifisko rakstu datubāzē.
     */
    //BMF07
    public function destroy(string $id)
    {
        $raksts = Raksts::find($id);
        $raksts->delete();
        return redirect()->route("blog.index")->with("success","Raksts dzēsts!");
    }
}
