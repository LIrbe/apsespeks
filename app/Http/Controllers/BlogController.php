<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Models\Raksts;
#use function PHPUnit\Framework\returnArgument;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $raksti = Raksts::all();
        return view("blog.index", compact("raksti"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("blog.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        Raksts::create($request->validated());
        return redirect()->route("blog.show", $request->id)->with("success","Jauns raksts izveidots!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $raksts = Raksts::find($id);
        return redirect()->route("blog.show", $raksts->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $raksts = Raksts::find($id);
        return redirect()->route("blog.edit", $raksts->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, string $id)
    {
        $raksts = Raksts::find($id);
        $raksts->update($request->validated());
        return redirect()->route("blog.show", $request->id)->with("success","Raksts atjaunots!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $raksts = Raksts::find($id);
        $raksts->delete();
        return redirect()->route("blog.index")->with("success","Raksts dzēsts!");
    }
}
