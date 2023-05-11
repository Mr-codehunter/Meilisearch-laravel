<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorResource;
use App\Http\Resources\ArticlesResource;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Articles;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query   = 'moh';
        $sort = $request->input('sort');
        $results = Articles::search($query)
        ->orderBy($sort,'ASC')
      //   ->whereHas('author', function ($sk) {
      //     $sk->where('name', 'deepak');
      // })
      ->where('author_id', 1)
        ->get();
        return ArticlesResource::collection($results);

        // $results = Author::search($query)->orderBy($sort,'ASC')->where('location','mohali')->paginate(5);
        // return AuthorResource::collection($results);


  }
}
