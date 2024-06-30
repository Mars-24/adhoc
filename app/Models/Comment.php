<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tags;

class Comment extends Model
{
    use HasFactory;
    public function tags(){
        return $this->belongsToMany(Tags::class,'tags_comments','tag_id','comment_id');
    }
}
