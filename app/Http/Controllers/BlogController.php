<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Models\raksts;
#use function PHPUnit\Framework\returnArgument;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $raksti = raksts::all();
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
        raksts::create($request->validated());
        return redirect()->route("blog.show", $request->id)->with("success","Jauns raksts izveidots!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $raksts = raksts::find($id);
        return view("blog.show", compact("raksts"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $raksti = raksts::find($id);
        return view("", compact(""));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $raksts = raksts::find($id);
        $raksts->update($request->validated());
        return redirect()->route("blog.show")->with("success","Raksts atjaunots!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $raksts = raksts::find($id);
        $raksts->delete();
        return redirect()->route("blog.index")->with("success","Raksts dzēsts!");
    }
}
