<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
// use App\Models\Author;

class Article extends Model
{
    use HasFactory;
    use Searchable; 
    
    
        protected $fillable = ['author_id','title','description'];
    
    // public function searchableAs()
    // {
    //     return 'nebero';
    // }

    public function author()
    {
    
        return $this->belongsTo(Author::class,'author_id');

    }
    
    public function toSearchableArray()
    {
        return [
            'title' => '',
            'description' => '',
            // 'authors.name' => '',
        ];
    }

}