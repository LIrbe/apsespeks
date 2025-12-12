<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShopArticleRequest;
use App\Models\ShopArticle;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $raksti = ShopArticle::all();
        return view("shop.index", compact("raksti"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("shop.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShopArticleRequest $request)
    {
        $raksts = StoreShopArticleRequest::create($request->validated());
        return redirect()->route("shop.index", compact("raksts"))->with("success","Jauns raksts izveidots!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $raksts = ShopArticle::find($id);
        return view("shop.show", compact("raksts"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $raksts = ShopArticle::find($id);
        return view("shop.edit", compact("raksts"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreShopArticleRequest $request, string $id)
    {
        $raksts = ShopArticle::find($request->id);
        $raksts->update($request->validated());
        return redirect()->route("shop.show", $request->id)->with("success","Raksts atjaunots!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $raksts = ShopArticle::find($id);
        $raksts->delete();
        return redirect()->route("shop.index")->with("success","Raksts dzēsts!");
    }
}
