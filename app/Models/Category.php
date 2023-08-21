<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'categories';

    protected $fillable = [
        'name',
    ];

    // return collection of posts belonging to this category
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
