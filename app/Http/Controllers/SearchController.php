<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorResource;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;
use App\Models\Author;
// use Illuminate\Support\Collection;
use App\Models\Article;

class SearchController extends Controller
{
  public function search(Request $request)
  {

    // $query="qui"
    // $search=Article::where('title', 'est');
  // });
    // dd($search);




    $articles = Article::search(trim($request->get('search')) ?? '')
    ->query(function ($query) {
        $query->join('authors', 'articles.author_id', 'authors.id')
            ->select(['articles.id', 'articles.title',
             'articles.description', 'authors.name as author',
             'authors.location as location'])
            ->where('authors.location','sit')
            ->orderBy('articles.id', 'ASC');
    })->paginate(500);

return response()->json($articles);








    // $articles=Article::paginate(500);

      // $array=collect($articles);
      // $result = $array->search('dolores');
      // return response()->json($result);
      // // return new ArticleResource($result);

  

      
      // $articles = Article::paginate(500); 
      // $searchTerm = 'qui'; 
      // $filteredUsers = $articles->filter(function ($article) use ($searchTerm) {
      //   return stripos($article->title, $searchTerm) !== false;
      //   });

      //   dd($filteredUsers);
      //   // return response()->json($filteredUsers);
        



    
    
    // $articles=Article::paginate(100);
    // // Cache::put('articles', $articles, $expirationInSeconds);
    // // $users = Cache::get('articles');
    // // dd($users);
    
    // $array=collect($articles);
    // $result = $array->search('dolores');
    // dd($result);
    //   // dd($array);








    
    
    // $query   = 'est';
    // // $query   = null;
    // $sort = $request->input('sort');
    
    // $results = Article::search($query)->paginate(20);
    //     $authorIds = Author::where('location', 'sit')->pluck('id');
         
    //     $filteredResults = $results->filter(function ($article) use ($authorIds) {
    //         return $authorIds->contains($article->author_id);
    //     });
        
    //     $sortedResults = $filteredResults->sortByDesc($sort);
        
    //     return ArticleResource::collection($sortedResults);
        
        


     
  }
}
