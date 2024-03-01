<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ["category", "author"];

    protected $fillable = ["title", "slug", "desc", "content", "category_id", "user_id"];
    // protected $guarded = ["id", "updated_at", "published_at", "created_at"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
