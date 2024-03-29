<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'added_by',
        'images',
        'descriptions',
    ];

    protected $casts = [
        "images" => "array",
        "descriptions" => "array"
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(BlogComment::class, "blog_id");
    }
}
