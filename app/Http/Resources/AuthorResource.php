<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ArticlesResource;

class AuthorResource extends JsonResource
{

    
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name'=>$this->name,
            'location'=>$this->location,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            // 'article'=>ArticleResource::collection($this->article),
    ];

    }
}
