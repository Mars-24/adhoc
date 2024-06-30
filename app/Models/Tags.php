<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;


class Tags extends Model
{
    use HasFactory;
    public function comments(){
        return $this->belongsToMany(Comment::class,'tags_comments','tag_id','comment_id');
    }
}
