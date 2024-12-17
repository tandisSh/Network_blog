<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Testing\Fluent\Concerns\Has;

class Article extends Model
{

    use HasFactory;
    protected $guarded = ["id"];
    // Article.php
public function category()
{
    return $this->belongsTo(Category::class);
}

}
