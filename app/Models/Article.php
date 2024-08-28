<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Laravel\Scout\Searchable;
use App\Models\Image;



class Article extends Model
{

    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'user_id',
        'avg_grade'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category
        ];
    }

    public static function toBeRevisedCount()
    {
        return Article::where([
            ['is_accepted', null],
            ['user_id', "!=", Auth::user()->id]
        ])->count();
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function averageGrade()
    {
        return $this->reviews()->avg('grade');
    }

}
