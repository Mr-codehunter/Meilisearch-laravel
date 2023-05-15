<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorResource;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Article;

class SearchController extends Controller
{
  public function search(Request $request)
  {
    // $results= Article::paginate(500);
    $query   = 'est';
    // $query   = null;
    $sort = $request->input('sort');
    
    $results = Article::search($query)->paginate(20);
    return response()->json($results);
        // $authorIds = Author::where('location', 'sit')->pluck('id');
         
        // $filteredResults = $results->filter(function ($article) use ($authorIds) {
        //     return $authorIds->contains($article->author_id);
        // });
        
        // $sortedResults = $filteredResults->sortByDesc($sort);
        
        // return ArticleResource::collection($sortedResults);
        
        


        // $results = Articles::search($query)
        // //  ->wher//e('title', 'servers')
        // ->WhereHas('authors', function ($dk) {
        //   $dk->where('name', 'deepak');
        // })
        // ->orderBy($sort,'DESC')
        // ->get();
        // // dd//($results);
        // return ArticlesResource::collection($results);

        // $results = Author::search($query)->orderBy($sort,'ASC')->where('location','mohali')->paginate(5);
        // return AuthorResource::collection($results);

  }
}
