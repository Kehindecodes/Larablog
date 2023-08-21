<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    // The attributes that are mass assignable.
    protected $fillable = ['content', 'user_id', 'post_id'];
    // 
    protected $table = 'comments';


    // return user this comment belongs to
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
