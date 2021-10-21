<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $table = "comments";
    protected $fillable = [
        "content",
        "post",
    ];

    public function getPost()
    {
        return $this->belongsTo(Post::class,'id','post');
    }
}
