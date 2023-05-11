<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

use App\Http\Resources\ArticlesResource;
// use MeiliSearch\Client;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $articles=Articles::all();
        
        return response()->json($articles);
        //return ArticlesResource::collection($articles);

  }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'author_id'=>'nullable',
            'title'=>'required',
            'description'=>'required'
    
        ]);
        
        Articles::create($request->all());
        
        return response()->json([
            'message'=>'articles Created Successfully!!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json([
            'articles'=>$articles
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
