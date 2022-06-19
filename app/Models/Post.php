<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'content',
        'picture',
        'user_id',
        'published_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
