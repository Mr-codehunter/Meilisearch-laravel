<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Author extends Model
{
    use HasFactory;
    use searchable;
    protected $fillable = [

            'name',
            'location'
];

public function articles()
{

    return $this->hasMany(Articles::class);
}



}
