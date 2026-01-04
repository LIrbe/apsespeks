<?php

namespace App\Http\Controllers;

use App\Models\Raksts;
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
    
    //BMF08
    public function index()
    {
        $raksti = Raksts::where('type', 'shop')->get();
        return view("shop.index", compact("raksti"));
    }
}
