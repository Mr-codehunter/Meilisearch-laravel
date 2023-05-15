<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article=Article::all();
        
        //return ArticleResource::collection($article);
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
            'author_id'=>'required',
            'title'=>'required',
            'description'=>'required',
    
        ]);
        
        Articles::create($request->all());
        
        return response()->json([
            'message'=>'article Created Successfully!!']);
        }


    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        // dd($article);
        // return response()->json([
        //     'articles'=>$article
        // ]);
            return new ArticleResource($article);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
