<?php

namespace App\Http\Controllers;

use App\Models\ShopArticle;

class ShopController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Piedāvājuma kontrolētājs
    |--------------------------------------------------------------------------
    |
    | Šis kontrolētājs nodrošina lietotāju pārvirzīšanu uz 
    | Darbības virzienu sadaļas skatiem.
    | Loģika ir gandrīz vienāda ar Bloga sadaļu, tādēļ šeit tas 
    | nav nepieciešams.
    |
    */
    /**
     * Atgriež Darbības virzienu galveno skatu.
     */
    public function index()
    {
        $raksti = ShopArticle::all();
        return view("shop.index", compact("raksti"));
    }

    /**
     * Atgriež konkrētā raksta skatu veikala rakstam.
     */
    public function show(string $id)
    {
        $raksts = ShopArticle::find($id);
        return view("shop.show", compact("raksts"));
    }
}
