<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title', 'content', 'category_id', 'user_id'
    ];

    // return user this post belongs to
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // return category this post belongs to
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
