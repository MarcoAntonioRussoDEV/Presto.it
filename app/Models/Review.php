<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    protected $fillable=['title', 'content', 'grade', 'user_id', 'article_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
