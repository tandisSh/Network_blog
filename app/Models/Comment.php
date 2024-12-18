<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Testing\Fluent\Concerns\Has;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ["id",];

    // ارتباط با مقاله
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    // ارتباط با کاربر
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
