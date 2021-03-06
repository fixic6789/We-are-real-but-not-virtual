<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'cover',
        'was_published',
        'cover_size',
    ];

    public function images() {
        return $this->hasMany(Image::class);
    }
}
